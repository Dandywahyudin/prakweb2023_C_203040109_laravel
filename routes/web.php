<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Dandy Wahyudin",
        "email" => "Dandywahyudin19@gmail.com",
        "image" => "gambar.png"
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Dandy Wahyudin",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam hic libero quis tempora nesciunt, possimus ratione eius similique, repellat vel quod itaque! Voluptatibus, maxime! Minus magni corrupti itaque sequi a exercitationem ab laborum illum non, velit, pariatur fuga aspernatur, nam magnam veniam facilis dolores similique accusantium aliquam ipsam! Laudantium quos similique debitis soluta maiores et eius ipsa qui aperiam veniam, eaque mollitia iste, rerum eveniet consectetur libero accusantium nihil cupiditate."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Ujang",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam hic libero quis tempora nesciunt, possimus ratione eius similique, repellat vel quod itaque! Voluptatibus, maxime! Minus magni corrupti itaque sequi a exercitationem ab laborum illum non, velit, pariatur fuga aspernatur, nam magnam veniam facilis dolores similique accusantium aliquam ipsam! Laudantium quos similique debitis soluta maiores et eius ipsa qui aperiam veniam, eaque mollitia iste, rerum eveniet consectetur libero accusantium nihil cupiditate."
        ],
    ];    
    return view('posts', [
        "title" => "Blog",
        "posts" => $blog_posts
    ]);
});


Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Dandy Wahyudin",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam hic libero quis tempora nesciunt, possimus ratione eius similique, repellat vel quod itaque! Voluptatibus, maxime! Minus magni corrupti itaque sequi a exercitationem ab laborum illum non, velit, pariatur fuga aspernatur, nam magnam veniam facilis dolores similique accusantium aliquam ipsam! Laudantium quos similique debitis soluta maiores et eius ipsa qui aperiam veniam, eaque mollitia iste, rerum eveniet consectetur libero accusantium nihil cupiditate."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Ujang",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam hic libero quis tempora nesciunt, possimus ratione eius similique, repellat vel quod itaque! Voluptatibus, maxime! Minus magni corrupti itaque sequi a exercitationem ab laborum illum non, velit, pariatur fuga aspernatur, nam magnam veniam facilis dolores similique accusantium aliquam ipsam! Laudantium quos similique debitis soluta maiores et eius ipsa qui aperiam veniam, eaque mollitia iste, rerum eveniet consectetur libero accusantium nihil cupiditate."
        ],
    ];    
    $new_post = [];
    foreach ($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});



