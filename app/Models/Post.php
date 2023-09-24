<?php

namespace App\Models;



class Post 
{
    private  static  $blog_post=[[
        "title"=>"blog pertama",
        "slug"=>"blog-post-pertama",
        "author"=>"muhammad syahroni",
        "body"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio ex alias eaque, id dolorem vero excepturi ea cupiditate expedita neque quia saepe minima. Dolores vero corporis, ut voluptas perferendis fugit, eligendi quidem dolorum fuga aperiam quam commodi laborum sunt. Autem quaerat provident optio aliquam earum molestiae animi quidem porro distinctio at, sed beatae sunt ut, sit labore error! Esse unde cum officiis aperiam accusamus sapiente repudiandae illo ut perferendis? Perferendis cum voluptas vel quibusdam voluptatum aut molestias sed sint pariatur.
        "
        ],[        
            "title"=>"blog kedua",
            "slug"=>"blog-post-kedua",   
            "author"=>"raif raif",
            "body"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio ex alias eaque, id dolorem vero excepturi ea cupiditate expedita neque quia saepe minima. Dolores vero corporis, ut voluptas perferendis fugit, eligendi quidem dolorum fuga aperiam quam commodi laborum sunt. Autem quaerat provident optio aliquam earum molestiae animi quidem porro distinctio at, sed beatae sunt ut, sit labore error! Esse unde cum officiis aperiam accusamus sapiente repudiandae illo ut perferendis? Perferendis cum voluptas vel quibusdam voluptatum aut molestias sed sint pariatur.
            "
            ]];

            public static function all()  {
               return self::$blog_post;
            }
            public static function find($slug)  {
                $posts=self::$blog_post;
                $pos=[];
                $newpos=[];
            foreach ($posts as $p) {
                if ($p["slug"]===$slug) {
                    $newpos=$p;
                }
            }
            return $newpos;
            }
}
