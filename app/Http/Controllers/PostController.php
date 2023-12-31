<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index() {
        return view("/blog",[
            "title"=>"blog",
            "posts"=>Post::latest()->get()
            // "postingan"=>Post::all()
                ]);
    }
    public function show(Post $post)  {
        return view("post",[
            "title"=> "Single post",
            "post" => $post 
        ]);
    }
}
