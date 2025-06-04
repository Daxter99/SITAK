<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Laracasts\Utilities\JavaScript\JavaScriptFacade;

class PersyaratanController extends Controller
{
    public function index()
    {
        $menu = 'Persyaratan';
        $submenu = 'Persyaratan';
        $title = 'Persyaratan';

        JavaScriptFacade::put([
            'menu' => $menu,
            'submenu' => $submenu,
        ]);

        return view('admin.persyaratan.index', compact('menu', 'submenu', 'title'));
    }
}
