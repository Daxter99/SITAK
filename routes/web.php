<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LayoutController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/panduan', function () {
    return view('panduan');
})->name('panduan');

Route::get('/judul', function () {
    return view('judul');
})->name('judul');


Route::get('/dokumen', function () {
    return view('dokumen');
})->name('dokumen');

Route::get('/dashboard', [DashboardController::class, 'index']); // delete on production
Route::get('/menu', [LayoutController::class, 'menu']); // delete on production
Route::get('/submenu', [LayoutController::class, 'submenu']); // delete on production

// Model routes
Route::resource('persyaratan', 'App\Http\Controllers\Model\PersyaratanController');
// Admin routes
Route::prefix('admin')->group(function () {
    Route::resource('persyaratan', 'App\Http\Controllers\Admin\PersyaratanController');
});
