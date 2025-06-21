<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\Antrian;
use App\Models\Klinik;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cookie;


class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil semua pasien beserta antriannya
        // $pasiens = Pasien::with('antrian')->orderBy('tanggal', 'desc')->get();


        $pasiens = Pasien::with(['klinik', 'antrian'])->get();
        return view('dashboard.pasien.index', compact('pasiens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kliniks = Klinik::all(); // Ambil semua data klinik
        return view('landingpage.pendaftaran', compact('kliniks'));
        
        $kliniks = Klinik::all(); // ambil semua data klinik
        return view('dashboard.pasien.create', compact('kliniks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'klinik_id' => 'required|exists:kliniks,id',
            'nama' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'keluhan' => 'required|string',
            'nik' => 'required|string|max:16',
        ]);

        DB::beginTransaction();

        try {
            $pasien = Pasien::create([
                'klinik_id' => $request->klinik_id,
                'nama' => $request->nama,
                'status' => 'not started',
                'tanggal' => $request->tanggal,
                'keluhan' => $request->keluhan,
                'nik' => $request->nik,
            ]);

            $tanggal = Carbon::parse($request->tanggal)->toDateString();
            $lastNomor = Antrian::where('klinik_id', $request->klinik_id)
                ->where('tanggal', $tanggal)
                ->max('nomor');
            $nextNomor = $lastNomor ? $lastNomor + 1 : 1;

            Antrian::create([
                'pasien_id' => $pasien->id,
                'klinik_id' => $request->klinik_id,
                'tanggal' => $tanggal,
                'nomor' => $nextNomor,
            ]);

            DB::commit();

            // 🔍 Deteksi asal form dari input hidden 'source'
            if ($request->input('source') === 'user') {
                return redirect()->route('landingpage.antrian', ['klinik_id' => $request->klinik_id])
                    ->withCookies([
                        cookie()->forever('nomor_antrian', $nextNomor),
                        cookie()->forever('klinik_id', $request->klinik_id),
                        cookie()->forever('pasien_nama', $pasien->nama),
                    ]);

            }

            // Default: dari dashboard admin
            return redirect()->route('pasien.index')
                ->with('pesan', 'Pasien berhasil ditambahkan dengan nomor antrian: ' . $nextNomor);

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors('Terjadi kesalahan: ' . $e->getMessage());
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pasien = Pasien::with(['klinik', 'antrian'])->findOrFail($id);
        return view('dashboard.pasien.show', compact('pasien'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pasien = Pasien::findOrFail($id);
        $kliniks = Klinik::all();
        return view('dashboard.pasien.edit', compact('pasien', 'kliniks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
        'klinik_id' => 'required|exists:kliniks,id',
        'nama' => 'required|string|max:255',
        'tanggal' => 'required|date',
        'keluhan' => 'required|string',
        'nik' => 'required|string|max:16',
    ]);

        $pasien = Pasien::findOrFail($id);
        $pasien->update($request->all());

        return redirect()->route('pasien.index')->with('success', 'Data pasien berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pasien = Pasien::findOrFail($id);

    // Hapus juga antriannya
        $pasien->antrian()->delete();
        $pasien->delete();

        return redirect()->route('pasien.index')->with('success', 'Data pasien berhasil dihapus.');
    }
}
