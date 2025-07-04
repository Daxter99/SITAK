<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->middleware(['sso.auth']);

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/panduan', function () {
    return view('panduan');
})->name('panduan')->middleware(['sso.auth']);

Route::get('/judul', function () {
    return view('judul');
})->name('judul')->middleware(['sso.auth']);


Route::get('/dokumen', function () {
    return view('dokumen');
})->name('dokumen')->middleware(['sso.auth']);

// Dashboard routes
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->middleware(['sso.auth']);
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->middleware(['sso.auth']);
Route::get('/menu', [App\Http\Controllers\LayoutController::class, 'menu'])->middleware(['sso.auth']); // delete on production
Route::get('/submenu', [App\Http\Controllers\LayoutController::class, 'submenu'])->middleware(['sso.auth']); // delete on production

// Model routes
Route::prefix('model')->middleware(['sso.auth'])->group(function () {
    Route::resource('persyaratan', 'App\Http\Controllers\Model\PersyaratanController');
    Route::get('activity', [App\Http\Controllers\Model\ActivityController::class, 'index']);
})->middleware(['sso.auth']);
Route::prefix('model')->middleware(['sso.auth'])->group(function () {
    Route::resource('mahasiswa', 'App\Http\Controllers\Model\MahasiswaController');
    Route::get('activity', [App\Http\Controllers\Model\ActivityController::class, 'index']);
})->middleware(['sso.auth']);

// Admin routes
Route::prefix('admin')->middleware(['sso.auth'])->group(function () {
    Route::resource('persyaratan', 'App\Http\Controllers\Admin\PersyaratanController');
});
Route::prefix('admin')->middleware(['sso.auth'])->group(function () {
    Route::resource('mahasiswa', 'App\Http\Controllers\Admin\MahasiswaController');
});

// Activity routes
Route::get('activity', [App\Http\Controllers\ActivityController::class, 'index'])->middleware(['sso.auth']);

