@extends('main')


@section('title','Blog Posts')


@section('content')

  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h2>Blog</h2>
    </div>
  </div>


    @foreach ($posts as $post)



      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h3>{{ $post->title }}</h3>
          <h5>Published at: {{ date('M j, Y h:ia',strtotime($post->created_at))}}</h5>

          <p>{{ substr($post->body,0,250) }}{{ strlen($post->body)>250 ? '...' : "" }}</p>
          <a href="{{ route('blog.single',$post->id) }}" class="btn btn-primary btn-sm">Read more</a>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="text-center">
            {!! $posts->links() !!}
          </div>
        </div>
      </div>

    @endforeach





@endsection
