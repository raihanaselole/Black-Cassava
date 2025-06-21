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
        $selectedKlinikId = $request->input('klinik_id'); // dari query string (?klinik_id=...)
        $tanggal = now()->toDateString(); // hari ini

        $statistik = [
            'menunggu' => 0,
            'dilayani' => 0,
            'selesai' => 0,
        ];
        $nomorAntrian = $request->cookie('nomor_antrian');
        $cookieKlinikId = $request->cookie('klinik_id');
        $pasienNama = $request->cookie('pasien_nama');

        // Pakai klinik_id dari query (GET), atau fallback ke cookie
        $selectedKlinikId = $request->input('klinik_id', $cookieKlinikId);



        // Kalau ada klinik terpilih
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
                ->where('pasiens.status', 'in progress') // pastikan ini sesuai data
                ->count();

            $statistik['selesai'] = DB::table('antrians')
                ->join('pasiens', 'antrians.pasien_id', '=', 'pasiens.id')
                ->where('antrians.klinik_id', $selectedKlinikId)
                ->where('antrians.tanggal', $tanggal)
                ->where('pasiens.status', 'completed') // pastikan ini sesuai data
                ->count();
        }

        return view('landingpage.antrian', [
            'kliniks' => $kliniks,
            'selectedKlinikId' => $selectedKlinikId,
            'statistik' => $statistik,
            'nomorAntrian' => $nomorAntrian,
            'pasienNama' => $pasienNama
        ]);


    }
}
