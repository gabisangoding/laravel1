<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        User::create([
            'name' => 'Cahya',
            'email' => 'cahya@gmail.com',
            'password' => bcrypt('123')
        ]);
        
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
            
        ]);
        Post::create([
            'title' => 'Judul Pertama',
            'category_id' => 1, 
            'user_id' => 1,
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, quisquam! Inventore minus quam corporis a voluptatum,',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, quisquam! Inventore minus quam corporis a voluptatum, omnis totam laudantium sequi nemo quidem distinctio commodi. Minima, magnam qui! Nisi quos temporibus amet ipsam libero blanditiis enim! Omnis nihil ex, quis aspernatur autem, fugiat odit dignissimos mollitia iusto nesciunt cumque nam inventore ipsa? Sit molestias, voluptate nemo velit eveniet nulla sint animi voluptatum eos voluptatem quod earum distinctio quos voluptatibus ex saepe doloribus nesciunt asperiores quo. Quaerat dolorum tenetur reprehenderit eos et, pariatur vitae cum, quidem eaque nam ex placeat deleniti praesentium soluta. Facere temporibus sapiente, porro consequatur ab reprehenderit expedita eligendi.',

        ]);
        Post::create([
            'title' => 'Judul Kedua',
            'category_id' => 1, 
            'user_id' => 1,
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, quisquam! Inventore minus quam corporis a voluptatum,',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, quisquam! Inventore minus quam corporis a voluptatum, omnis totam laudantium sequi nemo quidem distinctio commodi. Minima, magnam qui! Nisi quos temporibus amet ipsam libero blanditiis enim! Omnis nihil ex, quis aspernatur autem, fugiat odit dignissimos mollitia iusto nesciunt cumque nam inventore ipsa? Sit molestias, voluptate nemo velit eveniet nulla sint animi voluptatum eos voluptatem quod earum distinctio quos voluptatibus ex saepe doloribus nesciunt asperiores quo. Quaerat dolorum tenetur reprehenderit eos et, pariatur vitae cum, quidem eaque nam ex placeat deleniti praesentium soluta. Facere temporibus sapiente, porro consequatur ab reprehenderit expedita eligendi.',
            'category_id' => 1, 
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Judul Ketiga',
            'category_id' => 2, 
            'user_id' => 1,
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, quisquam! Inventore minus quam corporis a voluptatum,',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, quisquam! Inventore minus quam corporis a voluptatum, omnis totam laudantium sequi nemo quidem distinctio commodi. Minima, magnam qui! Nisi quos temporibus amet ipsam libero blanditiis enim! Omnis nihil ex, quis aspernatur autem, fugiat odit dignissimos mollitia iusto nesciunt cumque nam inventore ipsa? Sit molestias, voluptate nemo velit eveniet nulla sint animi voluptatum eos voluptatem quod earum distinctio quos voluptatibus ex saepe doloribus nesciunt asperiores quo. Quaerat dolorum tenetur reprehenderit eos et, pariatur vitae cum, quidem eaque nam ex placeat deleniti praesentium soluta. Facere temporibus sapiente, porro consequatur ab reprehenderit expedita eligendi.',
            'category_id' => 2, 
            'user_id' => 1
        ]);







    }
}
