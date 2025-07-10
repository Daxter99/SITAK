<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Laracasts\Utilities\JavaScript\JavaScriptFacade;

class SettingController extends Controller
{
    public function index()
    {
        $menu = 'Setting';
        $submenu = 'Setting';
        $title = 'Setting';

        JavaScriptFacade::put([
            'menu' => $menu,
            'submenu' => $submenu,
        ]);

        return view('admin.setting.index', compact('menu', 'submenu', 'title'));
    }
}
