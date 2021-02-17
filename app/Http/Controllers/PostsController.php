<?php

namespace App\Http\Controllers;
//---------------------TIP------------------------------------------
//Can generate controller via CLI using "php artisan make:controller PostsController"
//------------------------------------------------------------------

//Moved from web.php
class PostsController
{
  public function show($slug)
  {
    //Posts are now stored in MySQL database
    $post = \DB::table('posts')->where('slug', $slug)->first();

    return view('posts', [
      'post' => $post
    ]);
  }
}
