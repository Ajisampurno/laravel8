<?php


use Illuminate\Support\Facades\Route;
use App\Models\Post;
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

// tampilan home
Route::get('/', function () {
    return view('home',[
        "title" => "home"
    ]);
});

//tampilan about
Route::get('/about', function () {
    return view('about',[
        "title" => "about",
        "nama" => "Aji ampurno",
        "nim" => "143218059",
        "img" => "aji.jpg"
    ]);
});

//tampilan halaman data
Route::get('/blog', function () {
    return view('posts',[
        "title" => "blog",
        "posts" => Post::all()
    ]);
});

//tampilan salah satu data dari halaman data
Route::get('posts/{slug}', function ($slug) {
    return view('post',[
        "title" => "web_post",
        "post" => Post::find($slug)
    ]);
});