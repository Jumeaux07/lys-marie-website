<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        view()->share([
            'menu' => 'home',
            'title' => 'Accueil',

        ]);
    }

    public function index()
    {

        return view('home.index');
    }
}
