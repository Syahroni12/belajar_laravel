<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view("home",[
        "title"=>"home"
    ]);
});

Route::get('/pelanggan', function () {
    return view("pelanggan",[
        "nama"=>"syahroni",
        "umur"=>19,
        "alamat"=>"umbulsari jember prid oyisleh uhuh nyel",
        "title"=>"pelanggan"
    ]);
});

Route::get('/karyawan', function () {
    return view("petugas_karyawan",[
"title"=>"karyawan"
    ]);
});
 

Route::get('/blog', function () {
    
    return view("/blog",[
"title"=>"blog",
"postingan"=>Post::all()
    ]);
});
//halaman single post
Route::get('post/{slug}', function ($slug) {






    return view("post",[
        "title"=> "Single post",
        "post" => Post::find($slug)
    ]);
});
 
