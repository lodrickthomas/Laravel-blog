@extends('main')

@section('stylesheet')
  <link rel="stylesheet" href="/css/master.css">
@endsection

@section('title', 'Create Post')

@section('content')

<h3>Create your post here!!</h3>


<div class="col-md-8 col-md-offset-2">
  {!! Form::open(array('route' => 'posts.store')) !!}
  <div class="form-group">
      {{ Form::label('title', 'Title:') }}

      {{ Form::text('title', null, array('class'=>'form-control','required'=>'','maxlenght'=>'255', 'placeholder'=>'Enter your post title here...')) }}
  </div>

  <div class="form-group">
      {{ Form::label('slug', 'Slug:') }}

      {{ Form::text('slug', null, array('class'=>'form-control','required'=>'','minlength'=>'5','maxlenght'=>'255', 'placeholder'=>'Enter your post title here...')) }}
  </div>

  <div class="form-group">
      {{ Form::label('body', 'Post Body:') }}

      {{ Form::textarea('body', '', array('class'=>'form-control', 'placeholder'=>'Type your post here...')) }}
  </div>

  <div class="">
    {{ Form::submit('Create Post', array('class'=>'btn btn-primary btn-lg btn-block') ) }}
  </div>
  {!! Form::close() !!}
</div>
@endsection
