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
               return collect(self::$blog_post);//menambahkan collec dikarnakan ada fungsi yang ingin di pakai

            }
            public static function find($slug)  {
                $posts=static::all();//fungsi self kusus properti static, dan static khusus untuk method static

     
            return $posts->firstWhere('slug',$slug);//dikarnanakan array dari variabel $posts berupa collecct,
            //maka dapat memanggil fungsi firstWhere yang berfungsi mengambil data berdasarkan parameter yang ditentukan
            //contoh di atas mengambil data berdasarkan slug yang di kirim
            }
}
