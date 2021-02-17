<?php

namespace App\Http\Controllers;
use DB; //Import DB or use \DB on line 15
use App\Post; //Eloquent Model

//---------------------TIP------------------------------------------
//Can generate controller via CLI using "php artisan make:controller PostsController"
//------------------------------------------------------------------

//Moved from web.php
class PostsController
{
  public function show($slug)
  {

    return view('posts', [
      'post' => Post::where('slug', $slug)->firstOrFail()
    ]);

  }
}
