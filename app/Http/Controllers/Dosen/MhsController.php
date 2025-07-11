<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use Laracasts\Utilities\JavaScript\JavaScriptFacade;

class MhsController extends Controller
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

        return view('dosen.mhs.index', compact('menu', 'submenu', 'title'));
    }
}
