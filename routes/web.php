<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\PensionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\PensionController as AdminPensionController;
use App\Http\Controllers\Admin\TarificationController as AdminTarificationController;
use App\Http\Controllers\Admin\BoxController;
use App\Http\Controllers\Client\AnimalController as ClientAnimalController;

Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/services', [PublicController::class, 'services'])->name('services');
Route::get('/contact', [PublicController::class, 'contact'])->name('contact');

Route::get('/pensions', [PensionController::class, 'index'])->name('pensions.index');
Route::get('/pensions/{id}', [PensionController::class, 'show'])->name('pensions.show');

Route::get('/dashboard', function () {
    if (auth()->user()->role === 'admin') {
        return redirect()->route('admin.dashboard');
    }

    return redirect()->route('client.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth', 'client'])->prefix('client')->group(function () {
    Route::get('/dashboard', function () {
        return view('client.dashboard');
    })->name('client.dashboard');

    Route::get('/animaux', [ClientAnimalController::class, 'index'])->name('client.animaux.index');
    Route::get('/animaux/create', [ClientAnimalController::class, 'create'])->name('client.animaux.create');
    Route::post('/animaux', [ClientAnimalController::class, 'store'])->name('client.animaux.store');

    Route::get('/animaux/{animal}/edit', [ClientAnimalController::class, 'edit'])->name('client.animaux.edit');
    Route::put('/animaux/{animal}', [ClientAnimalController::class, 'update'])->name('client.animaux.update');
    Route::delete('/animaux/{animal}', [ClientAnimalController::class, 'destroy'])->name('client.animaux.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', function () {
        return view('profile.edit');
    })->name('profile.edit');
});

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('/pension/edit', [AdminPensionController::class, 'edit'])->name('admin.pension.edit');
    Route::put('/pension/update', [AdminPensionController::class, 'update'])->name('admin.pension.update');

    Route::get('/tarifs', [AdminTarificationController::class, 'edit'])->name('admin.tarifs.edit');
    Route::put('/tarifs', [AdminTarificationController::class, 'update'])->name('admin.tarifs.update');

    Route::get('/boxes', [BoxController::class, 'index'])->name('admin.boxes.index');
    Route::get('/boxes/create', [BoxController::class, 'create'])->name('admin.boxes.create');
    Route::post('/boxes', [BoxController::class, 'store'])->name('admin.boxes.store');
    Route::get('/boxes/{box}/edit', [BoxController::class, 'edit'])->name('admin.boxes.edit');
    Route::put('/boxes/{box}', [BoxController::class, 'update'])->name('admin.boxes.update');
    Route::delete('/boxes/{box}', [BoxController::class, 'destroy'])->name('admin.boxes.destroy');
});

require __DIR__.'/auth.php';