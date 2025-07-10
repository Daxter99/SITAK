<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->middleware(['sso.auth']);

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

// Model routes Admin
Route::prefix('model')->middleware(['sso.auth'])->group(function () {
    Route::resource('persyaratan', 'App\Http\Controllers\Model\PersyaratanController');
    Route::get('activity', [App\Http\Controllers\Model\ActivityController::class, 'index']);
})->middleware(['sso.auth']);
Route::prefix('model')->middleware(['sso.auth'])->group(function () {
    Route::resource('mahasiswa', 'App\Http\Controllers\Model\MahasiswaController');
    Route::get('activity', [App\Http\Controllers\Model\ActivityController::class, 'index']);
})->middleware(['sso.auth']);

Route::prefix('model')->middleware(['sso.auth'])->group(function () {
    Route::resource('pendaftaran', 'App\Http\Controllers\Model\PendaftaranController');
    Route::get('activity', [App\Http\Controllers\Model\ActivityController::class, 'index']);
})->middleware(['sso.auth']);

// Admin routes
Route::prefix('admin')->middleware(['sso.auth'])->group(function () {
    Route::resource('persyaratan', 'App\Http\Controllers\Admin\PersyaratanController');
});
Route::prefix('admin')->middleware(['sso.auth'])->group(function () {
    Route::resource('mahasiswa', 'App\Http\Controllers\Admin\MahasiswaController');
});
Route::prefix('admin')->middleware(['sso.auth'])->group(function () {
    Route::resource('jadwal-seminar', 'App\Http\Controllers\Admin\SeminarController');
});
Route::prefix('admin')->middleware(['sso.auth'])->group(function () {
    Route::resource('jadwal-sidang', 'App\Http\Controllers\Admin\SidangController');
});
Route::prefix('admin')->middleware(['sso.auth'])->group(function () {
    Route::resource('setting', 'App\Http\Controllers\Admin\SettingController');
});
Route::prefix('admin')->middleware(['sso.auth'])->group(function () {
    Route::resource('dokumen', 'App\Http\Controllers\Admin\DokumenController');
});


// Mahasiswa Route
Route::prefix('mhs')->middleware(['sso.auth'])->group(function () {
    Route::resource('pendaftaran', 'App\Http\Controllers\Mhs\PendaftaranController');
});
Route::prefix('mhs')->middleware(['sso.auth'])->group(function () {
    Route::resource('pembimbing', 'App\Http\Controllers\Mhs\PembimbingController');
});
Route::prefix('mhs')->middleware(['sso.auth'])->group(function () {
    Route::resource('berkas', 'App\Http\Controllers\Mhs\BerkasController');
});
Route::prefix('mhs')->middleware(['sso.auth'])->group(function () {
    Route::resource('berkasakhir', 'App\Http\Controllers\Mhs\BerkasakhirController');
});


// Route Admin Fakultas
Route::prefix('fakultas')->middleware(['sso.auth'])->group(function () {
    Route::resource('persyaratan', 'App\Http\Controllers\Admin\PersyaratanController');
});
Route::prefix('fakultas')->middleware(['sso.auth'])->group(function () {
    Route::resource('mahasiswa', 'App\Http\Controllers\Admin\MahasiswaController');
});
Route::prefix('fakultas')->middleware(['sso.auth'])->group(function () {
    Route::resource('jadwal-seminar', 'App\Http\Controllers\Admin\SeminarController');
});
Route::prefix('fakultas')->middleware(['sso.auth'])->group(function () {
    Route::resource('jadwal-sidang', 'App\Http\Controllers\Admin\SidangController');
});


// Activity routes
Route::get('activity', [App\Http\Controllers\ActivityController::class, 'index'])->middleware(['sso.auth']);

