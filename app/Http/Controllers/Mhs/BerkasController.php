<?php

namespace App\Http\Controllers\Mhs;

use App\Http\Controllers\Controller;
use Laracasts\Utilities\JavaScript\JavaScriptFacade;

class BerkasController extends Controller
{
    public function index()
    {
        $menu = 'Berkas';
        $submenu = 'Berkas';
        $title = 'Berkas';

        JavaScriptFacade::put([
            'menu' => $menu,
            'submenu' => $submenu,
        ]);

        return view('mhs.Berkas.index', compact('menu', 'submenu', 'title'));
    }
}