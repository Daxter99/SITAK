<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Laracasts\Utilities\JavaScript\JavaScriptFacade;

class SeminarController extends Controller
{
    public function index()
    {
        $menu = 'Jadwal Seminar';
        $submenu = 'Jadwal Seminar';
        $title = 'Jadwal Seminar';

        JavaScriptFacade::put([
            'menu' => $menu,
            'submenu' => $submenu,
        ]);

        return view('admin.jadwal-seminar.index', compact('menu', 'submenu', 'title'));
    }
}
