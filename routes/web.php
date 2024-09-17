<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
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
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
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

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
