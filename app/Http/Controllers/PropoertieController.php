<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropoertieController extends Controller
{
    public function __construct()
    {
        view()->share([
            'menu' => 'propertie',
            'title' => 'Propriétés',

        ]);
    }

    public function index()
    {
        return view('propertie.index');
    }

    public function show()
    {

        return view('propertie.show');
    }
}
