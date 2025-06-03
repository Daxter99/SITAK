<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laracasts\Utilities\JavaScript\JavaScriptFacade;

class LayoutController extends Controller
{
    public function menu()
    {
        $menu = 'Menu';
        $submenu = 'Menu';
        $title = 'Menu';

        JavaScriptFacade::put([
            'menu' => $menu,
            'submenu' => $submenu,
        ]);

        return view('layouts.menu', compact('menu', 'submenu', 'title'));
    }

    public function submenu()
    {
        $menu = 'With Submenu';
        $submenu = 'Submenu';
        $title = 'Submenu';

        JavaScriptFacade::put([
            'menu' => $menu,
            'submenu' => $submenu,
        ]);

        return view('layouts.submenu', compact('menu', 'submenu', 'title'));
    }
}
