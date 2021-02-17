<?php

namespace App\Http\Controllers;
//---------------------TIP------------------------------------------
//Can generate controller via CLI using "php artisan make:controller PostsController"
//------------------------------------------------------------------

//Moved from web.php
class PostsController
{
  public function show($post)
  {
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
  }
}
