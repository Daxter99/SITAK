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