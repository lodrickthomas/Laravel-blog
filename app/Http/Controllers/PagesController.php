<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PagesController extends Controller
{
  public function welcome(){
    // order front posts listing the latest one and limit display by 4 posts only
    $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
    return view('pages.welcome')->with('posts', $posts);
  }
  public function about(){
    return view('pages.about');
  }
  public function contact(){
    return view('pages/contact');
  }

}
