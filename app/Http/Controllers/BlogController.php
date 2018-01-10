<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class BlogController extends Controller
{
    public function single($slug)
    {
      // take data from db
      $post = Post::where('slug', '=', $slug)->first();

      // retuen the view

      return view('blog.single')->with('post', '$post');
    }
}
