<?php

namespace App\Http\Controllers;

use App\Models\About;

class AboutController extends Controller
{
    // halaman about isinya data dari model About
    public function about()
    {
        $posts = About::data();
        return view('about', compact('posts'));
    }
}
