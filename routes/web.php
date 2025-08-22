<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth', 'verified'])->group(function () {

    // Admin dashboard
    Route::get('/admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])
        ->middleware('role:admin')
        ->name('admin.dashboard');

    // Peserta dashboard
    Route::get('/peserta/dashboard', [App\Http\Controllers\Peserta\DashboardController::class, 'index'])
        ->middleware('role:peserta')
        ->name('peserta.dashboard');
});

// Route::middleware('auth')->group(function () {
//     Route::get('/dashboard-2', function () {
//         return view('dashboard-2');
//     })->name('dashboard-2');
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
