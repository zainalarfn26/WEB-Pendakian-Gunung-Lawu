<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PendakiController;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

// Public routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/pendaftaran', [PendakiController::class, 'create'])->name('pendaki.create');
Route::post('/pendaftaran', [PendakiController::class, 'store'])->name('pendaki.store');
Route::get('/pendaki', [PendakiController::class, 'index'])->name('pendaki.index');

// Dashboard route (redirect to admin dashboard after login)
Route::get('/dashboard', function () {
    return redirect()->route('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Admin routes (protected by auth middleware)
Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/pendaki', [AdminController::class, 'pendaki'])->name('pendaki.index');
    Route::get('/pendaki/{pendaki}/edit', [PendakiController::class, 'edit'])->name('pendaki.edit');
    Route::put('/pendaki/{pendaki}', [PendakiController::class, 'update'])->name('pendaki.update');
    Route::delete('/pendaki/{pendaki}', [PendakiController::class, 'destroy'])->name('pendaki.destroy');
});

// Profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
