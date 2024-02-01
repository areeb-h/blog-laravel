<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider and all of them will
    | be assigned to the "web" middleware group. Make something great!
    |
    */


Route::get('/', function () {

    /*\Illuminate\Support\Facades\DB::listen(function ($query) {
        logger($query->sql, $query->bindings);
    });*/

    return view('posts', [
        'posts' =>  Post::latest('published_at')->get(),
    ]);
});

Route::get('posts/{post:slug}', function (Post $post) {

    // Find a post by its slug and pass it to a view called "post"
    return view('post', [
        'post' =>  $post,
    ]);

}); //->where('post', '[A-Za-z0-9\_-]+');

Route::get('categories/{category:slug}', function (Category $category) {

    return view('posts', [
        'posts' =>  $category->posts,
    ]);
});

Route::get('authors/{author:username}', function (User $author) {

    return view('posts', [
        'posts' =>  $author->posts,
    ]);

});
