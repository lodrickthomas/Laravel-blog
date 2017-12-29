@extends('main')

@section('stylesheet')
  <link rel="stylesheet" href="/css/master.css">
@endsection

@section('title', 'Home')

@section('content')

  <div class="row">
    <div class="col-md-12">
      <div class="jumbotron">
        <h1>Hello, world!</h1>
        <p class="lead">You are welcome to laravel blog</p>
        <p><a class="btn btn-primary btn-md" href="#" role="button">Popular Posts</a></p>
        {{-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular POsts</a></p> --}}
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-md-8">
      <div class="post">
        <h3>Post title</h3>
        <p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit,
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliqui</p>
          <a href="#" class="btn btn-primary btn-sm" >Read more</a>
      </div>
      <hr>
      <div class="post">
        <h3>Post title</h3>
        <p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit,
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliqui</p>
          <a href="#" class="btn btn-primary">Read more</a>
      </div>
      <hr>
      <div class="post">
        <h3>Post title</h3>
        <p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit,
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliqui</p>
          <a href="#" class="btn btn-primary">Read more</a>
      </div>

    </div>
    <div class="col-md-3 col-md-offset-1">
      <h3>Side bar</h3>
      <p>p ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate ve
      lit esse cillum dolore eu fugiat nulla pariatur.
      Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
      officia deserunt mollit anim id est laborum.</p>

    </div>
  </div>



@endsection