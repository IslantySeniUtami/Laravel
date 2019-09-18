<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagescontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function homepage() {
        return view('pages.homepage');
    }

    public function about() {
        $halaman = 'about';
        return view('pages.about', compact('halaman'));
    }

    public function register() {
        $halaman = 'register';
        return view('pages.register', compact('halaman'));
    }
    
    public function navbar() {
        return view('pages.navbar');
    }

    

    
}
