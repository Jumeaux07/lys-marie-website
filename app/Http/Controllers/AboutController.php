<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __construct()
    {
        view()->share([
            'menu' => 'about',
            'title' => 'A propos',

        ]);
    }

    public function index()
    {
        return view('about.index');
    }
}
