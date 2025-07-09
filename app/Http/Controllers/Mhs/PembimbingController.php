<?php

namespace App\Http\Controllers\Mhs;

use App\Http\Controllers\Controller;
use Laracasts\Utilities\JavaScript\JavaScriptFacade;

class PembimbingController extends Controller
{
    public function index()
    {
        $menu = 'Pembimbing';
        $submenu = 'Pembimbing';
        $title = 'Pembimbing';

        JavaScriptFacade::put([
            'menu' => $menu,
            'submenu' => $submenu,
        ]);

        return view('mhs.Pembimbing.index', compact('menu', 'submenu', 'title'));
    }
}