<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct()
    {
        view()->share([
            'menu' => 'contact',
            'title' => 'Contact',

        ]);
    }

    public function index()
    {
        return view('contact.index');
    }
}
