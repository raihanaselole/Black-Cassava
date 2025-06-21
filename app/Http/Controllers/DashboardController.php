<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Klinik;
use App\Models\Pasien;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalKlinik = Klinik::count();
        $totalPasien = Pasien::count();
        $notStarted = Pasien::where('status', 'not_started')->count();
        $inProgress = Pasien::where('status', 'in progress')->count();
        $completed = Pasien::where('status', 'completed')->count();

        return view('dashboard.index', compact(
            'totalKlinik',
            'totalPasien',
            'notStarted',
            'inProgress',
            'completed'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
