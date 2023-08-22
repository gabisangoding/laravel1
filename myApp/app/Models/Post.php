<?php

namespace App\Models;

class Post
{
    private static $blog_post = [
        [
            "title" => "Lorem ipsum dolor sit amet",
            "slug" => "lorem_ipsum_dolor_sit_amet",
            "author" => "orang",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, sit.",
            "more" => [
                "p1" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores cupiditate dolor, veritatis delectus eligendi sapiente ea consectetur nesciunt ex sed hic quaerat dolorem earum. Debitis rem, sapiente suscipit error expedita reprehenderit ipsam sit consequatur dicta eligendi corporis earum ullam eveniet delectus, minima atque ipsum, deserunt recusandae impedit!",
            
                "p2" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores cupiditate dolor, veritatis delectus eligendi sapiente ea consectetur nesciunt ex sed hic quaerat dolorem earum. Debitis rem, sapiente suscipit error expedita reprehenderit ipsam sit consequatur dicta eligendi corporis earum ullam eveniet delectus, minima atque ipsum, deserunt recusandae impedit! Rem nostrum deserunt magnam, ducimus officiis vero dicta adipisci. Debitis atque fugiat neque, dolores cupiditate eos dicta beatae provident animi sint dolor impedit, odit asperiores ratione blanditiis non sed! In sunt consequatur vitae, autem molestias ratione exercitationem dolores labore enim consectetur natus, possimus optio repellat, saepe ipsa a hic aperiam ipsum molestiae veritatis!",
                
                "p3" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores cupiditate dolor, veritatis delectus eligendi sapiente ea consectetur nesciunt ex sed hic quaerat dolorem earum. Debitis rem, sapiente suscipit error expedita reprehenderit ipsam sit consequatur dicta eligendi corporis earum ullam eveniet delectus, minima atque ipsum, deserunt recusandae impedit! Rem nostrum deserunt magnam, ducimus officiis vero dicta adipisci. Debitis atque fugiat neque, dolores cupiditate eos dicta beatae provident animi sint dolor impedit, odit asperiores ratione blanditiis non sed! In sunt consequatur vitae, autem molestias ratione exercitationem dolores labore enim consectetur natus, possimus optio repellat, saepe ipsa a hic aperiam ipsum molestiae veritatis! speriores cupiditate dolor, veritatis delectus eligendi sapiente ea consectetur nesciunt ex sed hic quaerat dolorem earum. Debitis rem, sapiente suscipit error expedita reprehenderit ipsam sit consequatur dicta eligendi corporis earum ullam eveniet delectus, minima atque ipsum, deserunt recusandae impedit! Rem nostrum deserunt magnam, ducimus officiis vero dicta adipisci. Debitis atque fugiat neque, dolores cupiditate eos dicta beatae provident animi sint dolor impedit, odit asperiores ratione blanditiis non sed!",
                
                "p4" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda laborum omnis illo aut sunt quo repellat eius nostrum vitae quos unde officiis, dignissimos, tenetur quia veritatis nisi fugiat ab ratione inventore maxime. Quae, minus. Voluptate facilis odio ipsum ad necessitatibus?"

            ]
        ],
        [
            "title" => "Odit a eum libero eaque facilis!",
            "slug" => "odit_a_eum_libero_eaque_facilis",
            "author" => "orangan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, sit.",
            "more" => [
                "p1" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores cupiditate dolor, veritatis delectus eligendi sapiente ea consectetur nesciunt ex sed hic quaerat dolorem earum. Debitis rem, sapiente suscipit error expedita reprehenderit ipsam sit consequatur dicta eligendi corporis earum ullam eveniet delectus, minima atque ipsum, deserunt recusandae impedit!",
            
                "p2" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores cupiditate dolor, veritatis delectus eligendi sapiente ea consectetur nesciunt ex sed hic quaerat dolorem earum. Debitis rem, sapiente suscipit error expedita reprehenderit ipsam sit consequatur dicta eligendi corporis earum ullam eveniet delectus, minima atque ipsum, deserunt recusandae impedit! Rem nostrum deserunt magnam, ducimus officiis vero dicta adipisci. Debitis atque fugiat neque, dolores cupiditate eos dicta beatae provident animi sint dolor impedit, odit asperiores ratione blanditiis non sed! In sunt consequatur vitae, autem molestias ratione exercitationem dolores labore enim consectetur natus, possimus optio repellat, saepe ipsa a hic aperiam ipsum molestiae veritatis!",
                
                "p3" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores cupiditate dolor, veritatis delectus eligendi sapiente ea consectetur nesciunt ex sed hic quaerat dolorem earum. Debitis rem, sapiente suscipit error expedita reprehenderit ipsam sit consequatur dicta eligendi corporis earum ullam eveniet delectus, minima atque ipsum, deserunt recusandae impedit! Rem nostrum deserunt magnam, ducimus officiis vero dicta adipisci. Debitis atque fugiat neque, dolores cupiditate eos dicta beatae provident animi sint dolor impedit, odit asperiores ratione blanditiis non sed! In sunt consequatur vitae, autem molestias ratione exercitationem dolores labore enim consectetur natus, possimus optio repellat, saepe ipsa a hic aperiam ipsum molestiae veritatis! speriores cupiditate dolor, veritatis delectus eligendi sapiente ea consectetur nesciunt ex sed hic quaerat dolorem earum. Debitis rem, sapiente suscipit error expedita reprehenderit ipsam sit consequatur dicta eligendi corporis earum ullam eveniet delectus, minima atque ipsum, deserunt recusandae impedit! Rem nostrum deserunt magnam, ducimus officiis vero dicta adipisci. Debitis atque fugiat neque, dolores cupiditate eos dicta beatae provident animi sint dolor impedit, odit asperiores ratione blanditiis non sed!",
                
                "p4" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda laborum omnis illo aut sunt quo repellat eius nostrum vitae quos unde officiis, dignissimos, tenetur quia veritatis nisi fugiat ab ratione inventore maxime. Quae, minus. Voluptate facilis odio ipsum ad necessitatibus?"
            ]
        ]
    ];


    public static function all() {
        return collect(self::$blog_post);
    }


    public static function find($slug) {
        $posts = static::all();
        
        return $posts->firstWhere('slug', $slug);
    }
}
