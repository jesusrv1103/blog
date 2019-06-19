<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function home()
    {
        $posts = Post::latest('published_at')->get();

        //return view('welcome')->with('posts',$posts);
        return view('welcome', compact('posts'));
    }
}
