@extends('main')

@section('stylesheet')
  <link rel="stylesheet" href="/css/master.css">
@endsection

@section('title', 'Home')

@section('content')

  <div class="row">
    <div class="col-md-12">
      <div class="jumbotron">
        <h2 class="text-center">Hello, Africa!</h2>
        <p class="lead text-center">You are welcome to laravel blog</p>
        <p class="text-center"><a class="btn btn-primary btn-md" href="#" role="button">Popular Posts</a></p>
        {{-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular POsts</a></p> --}}
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-md-8">
      @foreach ($posts as $post)

        <div class="post">
          <h3>{{ $post->title }}</h3>
          {{-- display post body whilst limiting them to only 300 when exceed 300 char "..." displays --}}
          <p> {{ substr($post->body,0,300) }} {{ strlen($post->body)>300 ? "..." : "" }}</p>
            <a href="{{ route('blog.single', $post->slug) }}" class="btn btn-primary btn-sm" >Read more</a>
        </div>

      @endforeach

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
