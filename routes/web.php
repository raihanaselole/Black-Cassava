<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KlinikController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\DashboardController;

// 🟢 Akses tanpa login (guest)
Route::get('/', function () {
    return view('/landingpage/index');
})->name('landingpage.index');

Route::get('/infoklinik', function () {
    return view('/landingpage/infoklinik');
})->name('landingpage.infoklinik');

Route::get('/antrian', function () {
    return view('/landingpage/antrian');
})->name('landingpage.antrian');

// 🔐 Akses hanya untuk user yang sudah login
Route::middleware(['auth'])->group(function () {
    Route::get('/pendaftaran', function () {
        return view('/landingpage/pendaftaran');
    })->name('landingpage.pendaftaran');
});


// Route::prefix('dashboard/klinik')->name('klinik.')->group(function () {
//     Route::get('/', [KlinikController::class, 'index'])->name('index');
//     Route::get('/create', [KlinikController::class, 'create'])->name('create');
//     Route::post('/store', [KlinikController::class, 'store'])->name('store');
//     Route::get('/show/{id}', [KlinikController::class, 'show'])->name('show');
//     Route::get('/edit/{id}', [KlinikController::class, 'edit'])->name('edit');
//     Route::put('/update/{id}', [KlinikController::class, 'update'])->name('update');
//     Route::delete('/destroy/{id}', [KlinikController::class, 'destroy'])->name('destroy');
// });

// Route::prefix('dashboard/users')->name('users.')->group(function () {
//     Route::get('/', [UserController::class, 'index'])->name('index');
//     Route::get('/create', [UserController::class, 'create'])->name('create');
//     Route::post('/store', [UserController::class, 'store'])->name('store');
//     Route::get('/show/{id}', [UserController::class, 'show'])->name('show');
//     Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
//     Route::put('/update/{id}', [UserController::class, 'update'])->name('update');
//     Route::delete('/destroy/{id}', [UserController::class, 'destroy'])->name('destroy');
// });

// Route::prefix('dashboard/pasien')->group(function () {
//     Route::get('/', [PasienController::class, 'index'])->name('pasien.index');
//     Route::get('/create', [PasienController::class, 'create'])->name('pasien.create');
//     Route::post('/store', [PasienController::class, 'store'])->name('pasien.store');
//     Route::get('/show/{id}', [PasienController::class, 'show'])->name('pasien.show');
//     Route::get('/edit/{id}', [PasienController::class, 'edit'])->name('pasien.edit');
//     Route::put('/update/{id}', [PasienController::class, 'update'])->name('pasien.update');
//     Route::delete('/destroy/{id}', [PasienController::class, 'destroy'])->name('pasien.destroy');
// });

// Route::get('/dashboard', function () {
//     return view('/dashboard/index');
// })->middleware('auth')->name('dashboard');

Route::middleware(['auth', 'is_admin'])->prefix('dashboard')->group(function () {

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');


    Route::prefix('klinik')->name('klinik.')->group(function () {
        Route::get('/', [KlinikController::class, 'index'])->name('index');
        Route::get('/create', [KlinikController::class, 'create'])->name('create');
        Route::post('/store', [KlinikController::class, 'store'])->name('store');
        Route::get('/show/{id}', [KlinikController::class, 'show'])->name('show');
        Route::get('/edit/{id}', [KlinikController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [KlinikController::class, 'update'])->name('update');
        Route::delete('/destroy/{id}', [KlinikController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('users')->name('users.')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('/create', [UserController::class, 'create'])->name('create');
        Route::post('/store', [UserController::class, 'store'])->name('store');
        Route::get('/show/{id}', [UserController::class, 'show'])->name('show');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [UserController::class, 'update'])->name('update');
        Route::delete('/destroy/{id}', [UserController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('pasien')->name('pasien.')->group(function () {
        Route::get('/', [PasienController::class, 'index'])->name('index');
        Route::get('/create', [PasienController::class, 'create'])->name('create');
        Route::post('/store', [PasienController::class, 'store'])->name('store');
        Route::get('/show/{id}', [PasienController::class, 'show'])->name('show');
        Route::get('/edit/{id}', [PasienController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [PasienController::class, 'update'])->name('update');
        Route::delete('/destroy/{id}', [PasienController::class, 'destroy'])->name('destroy');
    });

});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/pendaftaran', [PasienController::class, 'create'])->name('landingpage.pendaftaran');
});

Route::get('/antrian', [LandingPageController::class, 'antrian'])->name('landingpage.antrian');




require __DIR__.'/auth.php';
