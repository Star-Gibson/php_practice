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

//Understanding use of wildcards
Route::get('/posts/{post}', function ($post) {
    //Currently no database, using datastore
    $posts = [
        'my-first-post' => 'Hello, this is my first blog post!',
        'my-second-post' => "Now I am getting the hang of this blogging thing."
    ];
    //Return 404 if no posts are associated with route.
    if (!array_key_exists($post, $posts)) {
        abort(404, 'SOrry this post was not found.');
    }
    //Return Posts View
    return view('posts', [
        'post' => $posts[$post]
    ]);
});
