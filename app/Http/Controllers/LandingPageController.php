<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Klinik;
use App\Models\Antrian;
use Illuminate\Support\Facades\DB;

class LandingPageController extends Controller
{
    public function antrian(Request $request)
    {
        $kliniks = Klinik::all();
        $selectedKlinikId = $request->input('klinik_id');
        $pasienId = $request->input('pasien_id'); // ambil dari URL
        $tanggal = now()->toDateString();

        $statistik = [
            'menunggu' => 0,
            'dilayani' => 0,
            'selesai' => 0,
        ];

        $pasien = null;
        $nomorAntrian = null;

        // Statistik
        if ($selectedKlinikId) {
            $statistik['menunggu'] = DB::table('antrians')
                ->join('pasiens', 'antrians.pasien_id', '=', 'pasiens.id')
                ->where('antrians.klinik_id', $selectedKlinikId)
                ->where('antrians.tanggal', $tanggal)
                ->where('pasiens.status', 'not started')
                ->count();

            $statistik['dilayani'] = DB::table('antrians')
                ->join('pasiens', 'antrians.pasien_id', '=', 'pasiens.id')
                ->where('antrians.klinik_id', $selectedKlinikId)
                ->where('antrians.tanggal', $tanggal)
                ->where('pasiens.status', 'in progress')
                ->count();

            $statistik['selesai'] = DB::table('antrians')
                ->join('pasiens', 'antrians.pasien_id', '=', 'pasiens.id')
                ->where('antrians.klinik_id', $selectedKlinikId)
                ->where('antrians.tanggal', $tanggal)
                ->where('pasiens.status', 'completed')
                ->count();
        }

        // Ambil data pasien jika ada
        if ($pasienId) {
            $pasien = \App\Models\Pasien::with('antrian')->find($pasienId);
            $nomorAntrian = $pasien?->antrian?->nomor;
        }

        return view('landingpage.antrian', [
            'kliniks' => $kliniks,
            'selectedKlinikId' => $selectedKlinikId,
            'statistik' => $statistik,
            'nomorAntrian' => $nomorAntrian,
            'pasienNama' => $pasien?->nama,
        ]);
    }

}
