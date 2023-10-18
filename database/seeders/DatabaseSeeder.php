<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(3)->create();
    // User::create([
    //     'name'=>"Muhammad syahroni",
    //     'email'=>"ronixria@gmail.com",
    //     'password'=>bcrypt("12345")
    // ]);
    // User::create([
    //     'name'=>"Ria oktaiona",
    //     'email'=>"ria@gmail.com",
    //     'password'=>bcrypt("12345")
    // ]);

Post::factory(20)->create();
    Category::create([
        'name'=>"Web programming",
        'slug'=>"web-program"
    ]);


    Category::create([
        'name'=>"Personal",
        'slug'=>"personal   "
    ]);

    // Post::create([
    //     'title'=>'Judul Pertama',
    //     'slug'=>"judul-pertama",
    //     'excerpt'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
    //     'body'=>'<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
    //     Cumque dolorem illum quisquam quas harum sunt ipsa ratione rerum veniam,
    //     rem optio ad exercitationem quibusdam saepe perspiciatis, debitis ducimus sit,</p>
    // <p>praesentium cupiditate error commodi! Asperiores optio fugit, autem, illo labore, aperiam deserunt corporis dolorum
    //     nulla ratione provident? Distinctio, ut? Atque excepturi pariatur nam.</p>
    // <p>Deserunt ut ab amet distinctio consequatur error nobis dolor.
    
    //     <p>Laborum praesentium quibusdam quia quod architecto, similique optio reiciendis nisi iusto suscipit beatae excepturi
    //     voluptas ut deserunt adipisci. Mollitia fugiat quis labore perferendis voluptates quam aut! Quaerat ab sit molestias
    //     quasi veniam est numquam ipsum blanditiis excepturi labore voluptatem adipisci, dolorum deserunt dignissimos enim
    //     aliquid, reiciendis odio vel mollitia voluptas nulla, et accusantium? Necessitatibus sit at illo obcaecati aperiam
    //     error placeat velit ad.</p><p> Atque, optio neque quas perspiciatis porro culpa excepturi deserunt placeat aliquam iste.
    //     Doloremque,
    //     illum impedit qui harum recusandae itaque laudantium magni quia eveniet,
    //     accusamus quae tempore?</p>',
    //     'category_id'=>1,
    //     'user_id'=>1
    // ]);
    // Post::create([
    //     'title'=>'Judul ke dua',
    //     'slug'=>"judul-ke 2",
    //     'excerpt'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
    //     'body'=>'<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
    //     Cumque dolorem illum quisquam quas harum sunt ipsa ratione rerum veniam,
    //     rem optio ad exercitationem quibusdam saepe perspiciatis, debitis ducimus sit,</p>
    // <p>praesentium cupiditate error commodi! Asperiores optio fugit, autem, illo labore, aperiam deserunt corporis dolorum
    //     nulla ratione provident? Distinctio, ut? Atque excepturi pariatur nam.</p>
    // <p>Deserunt ut ab amet distinctio consequatur error nobis dolor.
    
    //     <p>Laborum praesentium quibusdam quia quod architecto, similique optio reiciendis nisi iusto suscipit beatae excepturi
    //     voluptas ut deserunt adipisci. Mollitia fugiat quis labore perferendis voluptates quam aut! Quaerat ab sit molestias
    //     quasi veniam est numquam ipsum blanditiis excepturi labore voluptatem adipisci, dolorum deserunt dignissimos enim
    //     aliquid, reiciendis odio vel mollitia voluptas nulla, et accusantium? Necessitatibus sit at illo obcaecati aperiam
    //     error placeat velit ad.</p><p> Atque, optio neque quas perspiciatis porro culpa excepturi deserunt placeat aliquam iste.
    //     Doloremque,
    //     illum impedit qui harum recusandae itaque laudantium magni quia eveniet,
    //     accusamus quae tempore?</p>',
    //     'category_id'=>1,
    //     'user_id'=>1
    // ]);
    
    // Post::create([
    //     'title'=>'Judul ke tiga',
    //     'slug'=>"judul-ke 3",
    //     'excerpt'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
    //     'body'=>'<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
    //     Cumque dolorem illum quisquam quas harum sunt ipsa ratione rerum veniam,
    //     rem optio ad exercitationem quibusdam saepe perspiciatis, debitis ducimus sit,</p>
    // <p>praesentium cupiditate error commodi! Asperiores optio fugit, autem, illo labore, aperiam deserunt corporis dolorum
    //     nulla ratione provident? Distinctio, ut? Atque excepturi pariatur nam.</p>
    // <p>Deserunt ut ab amet distinctio consequatur error nobis dolor.
    
    //     <p>Laborum praesentium quibusdam quia quod architecto, similique optio reiciendis nisi iusto suscipit beatae excepturi
    //     voluptas ut deserunt adipisci. Mollitia fugiat quis labore perferendis voluptates quam aut! Quaerat ab sit molestias
    //     quasi veniam est numquam ipsum blanditiis excepturi labore voluptatem adipisci, dolorum deserunt dignissimos enim
    //     aliquid, reiciendis odio vel mollitia voluptas nulla, et accusantium? Necessitatibus sit at illo obcaecati aperiam
    //     error placeat velit ad.</p><p> Atque, optio neque quas perspiciatis porro culpa excepturi deserunt placeat aliquam iste.
    //     Doloremque,
    //     illum impedit qui harum recusandae itaque laudantium magni quia eveniet,
    //     accusamus quae tempore?</p>',
    //     'category_id'=>2,
    //     'user_id'=>1
    // ]);
    
    // Post::create([
    //     'title'=>'Judul ke Empat',
    //     'slug'=>"judul-ke 4",
    //     'excerpt'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
    //     'body'=>'<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
    //     Cumque dolorem illum quisquam quas harum sunt ipsa ratione rerum veniam,
    //     rem optio ad exercitationem quibusdam saepe perspiciatis, debitis ducimus sit,</p>
    // <p>praesentium cupiditate error commodi! Asperiores optio fugit, autem, illo labore, aperiam deserunt corporis dolorum
    //     nulla ratione provident? Distinctio, ut? Atque excepturi pariatur nam.</p>
    // <p>Deserunt ut a b amet distinctio consequatur error nobis dolor.
    
    //     <p>Laborum praesentium quibusdam quia quod architecto, similique optio reiciendis nisi iusto suscipit beatae excepturi
    //     voluptas ut deserunt adipisci. Mollitia fugiat quis labore perferendis voluptates quam aut! Quaerat ab sit molestias
    //     quasi veniam est numquam ipsum blanditiis excepturi labore voluptatem adipisci, dolorum deserunt dignissimos enim
    //     aliquid, reiciendis odio vel mollitia voluptas nulla, et accusantium? Necessitatibus sit at illo obcaecati aperiam
    //     error placeat velit ad.</p><p> Atque, optio neque quas perspiciatis porro culpa excepturi deserunt placeat aliquam iste.
    //     Doloremque,
    //     illum impedit qui harum recusandae itaque laudantium magni quia eveniet,
    //     accusamus quae tempore?</p>',
    //     'category_id'=>2,
    //     'user_id'=>2
    // ]);
    
    }
}
