<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laracasts\Utilities\JavaScript\JavaScriptFacade;

class DashboardController extends Controller
{
    public function index()
    {
        $menu = 'Dashboard';
        $submenu = 'Dashboard';
        $title = 'Dashboard';

        JavaScriptFacade::put([
            'menu' => $menu,
            'submenu' => $submenu,
        ]);

        return view('dashboard', compact('menu', 'submenu', 'title'));
    }
}
