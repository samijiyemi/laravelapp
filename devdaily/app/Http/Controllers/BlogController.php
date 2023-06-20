<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index()
    {
        $posts = Blog::all();
        $title = "Newroom";
        return view('blog.index', compact('posts', 'title'));
    }
}
