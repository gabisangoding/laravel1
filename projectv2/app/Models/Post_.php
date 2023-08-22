<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
        [
            'title' => 'Waduh aku',
            'slug' => 'waduh-kamu',
            "author" => 'ini',
            "body"=>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam doloribus placeat, beatae eveniet eum perspiciatis odit impedit blanditiis nam dignissimos laborum. Dolore eligendi inventore veniam! Saepe accusantium soluta unde delectus architecto rerum veniam placeat tenetur perspiciatis magnam voluptas quis culpa dicta dolorum temporibus ea, commodi quasi, molestias neque distinctio explicabo alias quod perferendis! Magnam dolore incidunt aspernatur. Dolor est nihil tempore repellat pariatur voluptas praesentium ut ipsa ipsum molestiae unde accusantium distinctio nulla, quos, sequi veritatis ducimus reprehenderit harum nemo aliquam, voluptates nesciunt obcaecati quibusdam. Cupiditate animi dignissimos, id saepe ad aspernatur voluptatum sint dicta at aut, fuga, fugiat porro."
        ],
        [
            'title' => 'Kena Batu',
            'slug'=> 'kena-batu',
            "author" => 'joni',
            "body"=>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam doloribus placeat, beatae eveniet eum perspiciatis odit impedit blanditiis nam dignissimos laborum. Dolore eligendi inventore veniam! Saepe accusantium soluta unde delectus architecto rerum veniam placeat tenetur perspiciatis magnam voluptas quis culpa dicta dolorum temporibus ea, commodi quasi, molestias neque distinctio explicabo alias quod perferendis! Magnam dolore incidunt aspernatur. Dolor est nihil tempore repellat pariatur voluptas praesentium ut ipsa ipsum molestiae unde accusantium distinctio nulla, quos, sequi veritatis ducimus reprehenderit harum nemo aliquam, voluptates nesciunt obcaecati quibusdam. Cupiditate animi dignissimos, id saepe ad aspernatur voluptatum sint dicta at aut, fuga, fugiat porro aspernatur. Dolor est nihil tempore repellat pariatur voluptas praesentium ut ipsa ipsum molestiae unde accusantium distinctio nulla, quos, sequi veritatis ducimus reprehenderit harum nemo aliquam, voluptates nesciunt obcaecati quibusdam. Cupiditate animi dignissimos, id saepe ad aspernatur voluptatum sint dicta at aut, fuga, fugiat porro."
        ]
    ];
    public static function all(){
        return collect(self::$blog_posts); // ngambil dari 
    }
    public static function find($slug){ //slug parameter
        $posts = static::all();     // ini ngambil dari collection diatas
         return  $posts->firstWhere('slug', $slug);      //method first() untuk mengambil data yang paling pertama
    }
}
