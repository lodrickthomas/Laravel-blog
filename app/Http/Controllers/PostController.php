<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // you can orderBy('id') which is likey to be faster than created_at, either way can be asc or desc
      $posts = Post::orderBy('created_at', 'desc') -> paginate(5);
      return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate data
        $this->validate($request,array(
          // i got some errors because i typed title and body as variables with $
          'title' => 'required|max:255',
          'slug' => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
          'body' => 'required',
        ));
        // store data in db
        $post = new Post;
        $post -> title = $request -> title;
        $post -> slug = $request -> slug;
        $post -> body = $request -> body;

        $post -> save();

        Session::flash('success','Your blog post saved!');
        // redirect to another link
        return redirect() -> route('posts.show',$post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find the in the db and save it as a get_class_var
        $post = Post::find($id);
        //return the view
        return view('posts.edit')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

      // at first slug was created, but when user update post slug return an error claiming that it suppose to be unique, i intoduce if-else statement to solve that bug...
      $post = Post::find($id);
      // validate data
      //if-else checks if slug is there and require not to be re-updated
      if ($request->input('slug') == $post->slug) {
        # code...
        $this->validate($request,array(
          // i got some errors because i typed title and body as variables with $
          'title' => 'required|max:255',

          'body' => 'required',
        ));
      } else {
        # code...
        $this->validate($request,array(
          // i got some errors because i typed title and body as variables with $
          'title' => 'required|max:255',
          'slug' => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
          'body' => 'required',
        ));
      }



      // store data in db
      $post = Post::find($id);
      $post -> title = $request -> input('title');
      $post -> body = $request -> input('body');

      $post -> save();

      Session::flash('success','Your blog post was successfully updated!');
      // redirect to another link
      return redirect() -> route('posts.show',$post->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      // find post by id...
        $post = Post::find($id);
        // delete selected post...
        $post -> delete();
        // display messages, if success
        Session::flash('success','Your blog post was successfully deleted!');
        // return to another page...
        return redirect() -> route('posts.index');
    }
}
