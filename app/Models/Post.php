<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "judul" => "judul post pertama",
            "slug" => "judul-pertama",
            "author" => "Aji sampurno",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos deserunt sit consequuntur optio nulla, ducimus praesentium. Ipsa, quis. Eveniet maiores repellat mollitia veritatis tempora consectetur molestias nisi vitae pariatur labore aspernatur, laudantium incidunt eaque eligendi debitis doloremque quos provident blanditiis asperiores itaque, deserunt dicta ipsum! Illo exercitationem ratione quod nostrum, repellendus, quam id tenetur sed molestiae odio illum cupiditate, reprehenderit impedit perspiciatis! Eos nobis reprehenderit dolorem, vero quaerat quasi, molestiae magni cupiditate illum, perferendis a esse sit earum fuga magnam."
        ],
        [
            "judul" => "judul post kedua",
            "slug" => "judul-kedua",
            "author" => "Aji sampurno",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos deserunt sit consequuntur optio nulla, ducimus praesentium. Ipsa, quis. Eveniet maiores repellat mollitia veritatis tempora consectetur molestias nisi vitae pariatur labore aspernatur, laudantium incidunt eaque eligendi debitis doloremque quos provident blanditiis asperiores itaque, deserunt dicta ipsum! Illo exercitationem ratione quod nostrum, repellendus, quam id tenetur sed molestiae odio illum cupiditate, reprehenderit impedit perspiciatis! Eos nobis reprehenderit dolorem, vero quaerat quasi, molestiae magni cupiditate illum, perferendis a esse sit earum fuga magnam."
        ]
    ];

    //menampilkan data bases
    public static function all(){
        return self::$blog_posts;
    }

    //menampilkan salah satu data base
    public static function find($slug){
        $posts = self::$blog_posts;
       
        $post = [];
        foreach ($posts as $p) {
        if ($p["slug"] === $slug) {
                $post = $p;
            }
        }
        return $post;
    }
}
