<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
class PostController extends Controller
{
    public function index(){
        return view('posts', [
            "title" => "All Posts",
            "active" => 'posts',
            "posts" => Posts::latest()->get()
        ]);
    }

    public function show(Posts $post){
        return view('post', [
            "title" => "Single Post",
            "active" => 'posts',
            "post" => $post
        ]);
    }
}
