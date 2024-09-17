<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
     public static function all()
     {
          return  [
               [
                    'id' => 1,
                    'slug' => 'judul-artikel-1',
                    'title' => 'Judul Artikel 1',
                    'author' => 'Muhammad Sofa Yuliansyah',
                    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa ad ut voluptas, 
                              deleniti nemo voluptatum enim ex culpa quis tempora aliquam ratione expedita facere at nam accusamus modi laudantium maxime!'
               ],

               [
                    'id' => 2,
                    'slug' => 'judul-artikel-2',
                    'title' => 'Judul Artikel 2',
                    'author' => 'Muhammad Sofa Yuliansyah',
                    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos'
               ]
          ];
     }

     public static function find($slug): array
     {
          $post =  Arr::first(static::all(), function ($post) use ($slug) {
               return $post['slug'] == $slug;
          });

          if(! $post) {
               //memanggil 404
               abort(404);
          }
          
          return $post;
     }
}
