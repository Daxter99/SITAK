<?php

namespace App\Http\Controllers\Mhs;

use App\Http\Controllers\Controller;
use Laracasts\Utilities\JavaScript\JavaScriptFacade;

class BerkasakhirController extends Controller
{
    public function index()
    {
        $menu = 'Berkas Akhir';
        $submenu = 'Berkas Akhir';
        $title = 'Berkas Akhir';

        JavaScriptFacade::put([
            'menu' => $menu,
            'submenu' => $submenu,
        ]);

        return view('mhs.Berkasakhir.index', compact('menu', 'submenu', 'title'));
    }
}