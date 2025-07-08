<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
     public function index()
    {
        // Mengambil semua data mahasiswa dari database
        $mahasiswas = Mahasiswa::all();

        // Mengirimkan data mahasiswa ke view 'mahasiswa.index'
        // 'mahasiswas' (kunci array) akan menjadi nama variabel di view
        return view('mahasiswa.index', compact('mahasiswas'));
    }
}
