<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laracasts\Utilities\JavaScript\JavaScriptFacade;

class ActivityController extends Controller
{
    public function index()
    {
        $menu = 'User Activities';
        $submenu = 'User Activities';
        $title = 'User Activities';

        JavaScriptFacade::put([
            'menu' => $menu,
            'submenu' => $submenu,
        ]);

        return view('activity.index', compact('menu', 'submenu', 'title'));
    }
}
