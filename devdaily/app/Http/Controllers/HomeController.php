<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = "Homepage";
        return view('home.index', compact('title'));
    }

    public function about()
    {
        $title = "About Us";
        return view('home.about', compact('title'));
    }
}
