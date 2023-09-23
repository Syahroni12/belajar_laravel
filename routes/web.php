<?php

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
    $blog_post=[[
        "title"=>"blog pertama",
        "slug"=>"blog-post-pertama",
        "author"=>"muhammad syahroni",
        "body"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio ex alias eaque, id dolorem vero excepturi ea cupiditate expedita neque quia saepe minima. Dolores vero corporis, ut voluptas perferendis fugit, eligendi quidem dolorum fuga aperiam quam commodi laborum sunt. Autem quaerat provident optio aliquam earum molestiae animi quidem porro distinctio at, sed beatae sunt ut, sit labore error! Esse unde cum officiis aperiam accusamus sapiente repudiandae illo ut perferendis? Perferendis cum voluptas vel quibusdam voluptatum aut molestias sed sint pariatur.
        "
        ],[        
            "title"=>"blog kedua",
            "slug"=>"blog-post-kedua",   
            "author"=>"raif anaqie",
            "body"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio ex alias eaque, id dolorem vero excepturi ea cupiditate expedita neque quia saepe minima. Dolores vero corporis, ut voluptas perferendis fugit, eligendi quidem dolorum fuga aperiam quam commodi laborum sunt. Autem quaerat provident optio aliquam earum molestiae animi quidem porro distinctio at, sed beatae sunt ut, sit labore error! Esse unde cum officiis aperiam accusamus sapiente repudiandae illo ut perferendis? Perferendis cum voluptas vel quibusdam voluptatum aut molestias sed sint pariatur.
            "
            ]];
    return view("/blog",[
"title"=>"blog",
"postingan"=>$blog_post
    ]);
});
//halaman single post
Route::get('post/{slug}', function ($slug) {
    $blog_post=[[
        "title"=>"blog pertama",
        "slug"=>"blog-post-pertama",
        "author"=>"muhammad syahroni",
        "body"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio ex alias eaque, id dolorem vero excepturi ea cupiditate expedita neque quia saepe minima. Dolores vero corporis, ut voluptas perferendis fugit, eligendi quidem dolorum fuga aperiam quam commodi laborum sunt. Autem quaerat provident optio aliquam earum molestiae animi quidem porro distinctio at, sed beatae sunt ut, sit labore error! Esse unde cum officiis aperiam accusamus sapiente repudiandae illo ut perferendis? Perferendis cum voluptas vel quibusdam voluptatum aut molestias sed sint pariatur.
        "
        ],[        
            "title"=>"blog kedua",
            "slug"=>"blog-post-kedua",   
            "author"=>"raif anaqie",
            "body"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio ex alias eaque, id dolorem vero excepturi ea cupiditate expedita neque quia saepe minima. Dolores vero corporis, ut voluptas perferendis fugit, eligendi quidem dolorum fuga aperiam quam commodi laborum sunt. Autem quaerat provident optio aliquam earum molestiae animi quidem porro distinctio at, sed beatae sunt ut, sit labore error! Esse unde cum officiis aperiam accusamus sapiente repudiandae illo ut perferendis? Perferendis cum voluptas vel quibusdam voluptatum aut molestias sed sint pariatur.
            "
            ]];
            $newpos=[];
            foreach ($blog_post as $post) {
                if ($post["slug"]===$slug) {
                    $newpos=$post;
                }
            }





    return view("post",[
        "title"=> "Single post",
        "post" => $newpos
    ]);
});
 
