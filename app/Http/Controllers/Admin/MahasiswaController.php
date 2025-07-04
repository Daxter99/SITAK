<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Laracasts\Utilities\JavaScript\JavaScriptFacade;

class MahasiswaController extends Controller
{
    public function index()
    {
        $menu = 'Mahasiswa';
        $submenu = 'Mahasiswa';
        $title = 'Mahasiswa';

        JavaScriptFacade::put([
            'menu' => $menu,
            'submenu' => $submenu,
        ]);

        return view('admin.mahasiswa.index', compact('menu', 'submenu', 'title'));
    }
}