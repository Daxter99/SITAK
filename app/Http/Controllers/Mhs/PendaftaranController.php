<?php

namespace App\Http\Controllers\Mhs;

use App\Http\Controllers\Controller;
use Laracasts\Utilities\JavaScript\JavaScriptFacade;

class PendaftaranController extends Controller
{
    public function index()
    {
        $menu = 'Pendaftaran';
        $submenu = 'Pendaftaran';
        $title = 'Pendaftaran';

        JavaScriptFacade::put([
            'menu' => $menu,
            'submenu' => $submenu,
        ]);

        return view('mhs.pendaftaran.index', compact('menu', 'submenu', 'title'));
    }
}