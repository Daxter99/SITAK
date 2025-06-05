<?php

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

// Dashboard routes
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
Route::get('/menu', [App\Http\Controllers\LayoutController::class, 'menu']); // delete on production
Route::get('/submenu', [App\Http\Controllers\LayoutController::class, 'submenu']); // delete on production

// Model routes
Route::prefix('model')->group(function () {
    Route::resource('persyaratan', 'App\Http\Controllers\Model\PersyaratanController');
    Route::get('activity', [App\Http\Controllers\Model\ActivityController::class, 'index']);
});
// Admin routes
Route::prefix('admin')->group(function () {
    Route::resource('persyaratan', 'App\Http\Controllers\Admin\PersyaratanController');
});
// Activity routes
Route::get('activity', [App\Http\Controllers\ActivityController::class, 'index']);
