<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Klinik;

class KlinikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kliniks = Klinik::all(); // ambil semua data klinik
        return view('dashboard.klinik.index', compact('kliniks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.klinik.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        // Validasi data
        $request->validate([
            'nama_klinik' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_telp' => 'required|string|max:15',
            'email' => 'required|email|unique:kliniks,email',
        ]);

        // Simpan ke database
        Klinik::create([
            'nama_klinik' => $request->nama_klinik,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
        ]);

        return redirect()->route('klinik.index')->with('pesan', 'Klinik berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $klinik = Klinik::findOrFail($id);
        return view('dashboard.klinik.show', compact('klinik'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $klinik = Klinik::findOrFail($id);
        return view('dashboard.klinik.edit', compact('klinik'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
        'nama_klinik' => 'required|string|max:255',
        'alamat' => 'required|string|max:255',
        'no_telp' => 'required|string|max:15',
        'email' => 'required|email|unique:kliniks,email,' . $id,
    ]);

        $klinik = Klinik::findOrFail($id);
        $klinik->update([
            'nama_klinik' => $request->nama_klinik,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
    ]);

        return redirect()->route('klinik.index')->with('pesan', 'Klinik berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $klinik = Klinik::findOrFail($id);
        $klinik->delete();

        return redirect()->route('klinik.index')->with('pesan', 'Klinik berhasil dihapus!');
    }
}
