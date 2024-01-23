<?php

use App\Models\Post;
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
    $posts = Post::all();

    /*$posts = array_map(function ($file) {

        $document = YamlFrontMatter::parseFile($file);

        return new Post(
            $document->title,
            $document->excerpt,
            $document->date,
            $document->body(),
            $document->slug
        );
    }, $files);*/

    return view('posts', [
        'posts' => $posts,
    ]);
});

Route::get('posts/{post}', function ($slug) {

    // Find a post by its slug and pass it to a view called "post"

    return view('post', [
        'post' =>  Post::find($slug),
    ]);

    /*
    $path = __DIR__ . "/../resources/posts/{$slug}.html";

    if (! file_exists($path)) {
        // ddd($path);
        return redirect('/');
    }

    $post = cache()->remember("posts.{$slug}", now()->addMinutes(2), fn() => file_get_contents($path));

    return view('post', [
        'post' =>  $post,
    ]);
    */

})->where('post', '[A-Za-z0-9\_-]+');
