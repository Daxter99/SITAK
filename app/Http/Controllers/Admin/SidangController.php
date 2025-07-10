<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Laracasts\Utilities\JavaScript\JavaScriptFacade;

class SidangController extends Controller
{
    public function index()
    {
        $menu = 'Jadwal Sidang';
        $submenu = 'Jadwal Sidang';
        $title = 'Jadwal Sidang';

        JavaScriptFacade::put([
            'menu' => $menu,
            'submenu' => $submenu,
        ]);

        return view('admin.jadwal-sidang.index', compact('menu', 'submenu', 'title'));
    }
}
