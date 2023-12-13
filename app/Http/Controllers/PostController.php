<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }
    public function contact()
    {
        return view('posts.contact');
    }
    public function about()
    {
        return view('posts.about');
    }
    public function show()
    {
        return view('posts.post');
    }
}
