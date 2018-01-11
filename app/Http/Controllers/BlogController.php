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

      // return view('blog.single')->with('post', '$post');
      return view('blog.single')->with(compact('post'));
    }

    public function index()
    {
      $posts = Post::orderBy('created_at', 'desc') ->paginate(10);

      // changed from with('posts','posts') to compact

      return view('blog.index')->with(compact('posts'));
    }
}
