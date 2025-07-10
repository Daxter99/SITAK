<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Laracasts\Utilities\JavaScript\JavaScriptFacade;

class DokumenController extends Controller
{
    public function index()
    {
        $menu = 'Dokumen';
        $submenu = 'Dokumen';
        $title = 'Dokumen';

        JavaScriptFacade::put([
            'menu' => $menu,
            'submenu' => $submenu,
        ]);

        return view('admin.dokumen.index', compact('menu', 'submenu', 'title'));
    }
}
