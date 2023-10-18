<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use  App\Http\Controllers\PostController;
class AuthorController extends Controller
{
    public function authorr(User $author)  {
        return view("blog",[
            "title"=> "User post",
            "posts" => $author->posts
        ]);
    }
}
