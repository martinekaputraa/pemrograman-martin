<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController; 
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Halaman utama langsung diarahkan ke login
Route::redirect('/', '/login');

Route::get('/login', [LoginController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [LoginController::class, 'store'])
    ->middleware('guest')
    ->name('login.store');

Route::post('/logout', [LoginController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

Route::get('/about', function () {
    return 'POS Barokah Mart.';
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('users', UserController::class);
    
    Route::get('/categories', function () {
        return 'Halaman Kelola Kategori (Khusus Admin)';
    })->name('categories.index');

    Route::get('/products', function () {
        return 'Halaman Kelola Produk (Khusus Admin)';
    })->name('products.index');

    Route::get('/reports/sales', function () {
        return 'Halaman Laporan Penjualan (Khusus Admin)';
    })->name('report.sales');
});

Route::middleware(['auth', 'role:admin,kasir'])->group(function () {
    Route::get('/pos', function () {
        return 'Halaman Transaksi POS';
    })->name('pos.index');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');

Route::get('/pos/history', function () {
    return 'Halaman Riwayat Transaksi Saya';
})->name('pos.history');