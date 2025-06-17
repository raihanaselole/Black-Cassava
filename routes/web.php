<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KlinikController;
use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Route;


// Landing page routes
Route::get('/', function () {
    return view('/landingpage/index');
})->name('landingpage');
Route::get('/dashboard', function () {
    return view('/dashboard/index');
})->name('landingpage');

Route::prefix('dashboard/klinik')->name('klinik.')->group(function () {
    Route::get('/', [KlinikController::class, 'index'])->name('index');
    Route::get('/create', [KlinikController::class, 'create'])->name('create');
    Route::post('/store', [KlinikController::class, 'store'])->name('store');
    Route::get('/show/{id}', [KlinikController::class, 'show'])->name('show');
    Route::get('/edit/{id}', [KlinikController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [KlinikController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [KlinikController::class, 'destroy'])->name('destroy');
});

Route::prefix('dashboard/pasien')->group(function () {
    Route::get('/', [PasienController::class, 'index'])->name('pasien.index');
    Route::get('/create', [PasienController::class, 'create'])->name('pasien.create');
    Route::post('/store', [PasienController::class, 'store'])->name('pasien.store');
    Route::get('/show/{id}', [PasienController::class, 'show'])->name('pasien.show');
    Route::get('/edit/{id}', [PasienController::class, 'edit'])->name('pasien.edit');
    Route::put('/update/{id}', [PasienController::class, 'update'])->name('pasien.update');
    Route::delete('/destroy/{id}', [PasienController::class, 'destroy'])->name('pasien.destroy');
});

