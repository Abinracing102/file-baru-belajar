<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    // seperti komponen tp bukan komponen halaman posts yg plural


    // halaman home isinya posts banyak
    public function welcome()
    {
        $posts = post::data();
        return view ('welcome', compact('posts'));
    }
}
