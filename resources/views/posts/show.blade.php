@extends('main')

@section('stylesheet')
  <link rel="stylesheet" href="/css/master.css">
@endsection

@section('title', 'Create Post')

@section('content')
<div class="row">
  <div class="col-md-8">
    <h1>{{ $post->title }}</h1>
    <p class="lead">
      {{ $post->body }}
    </p>
  </div>

  <div class="col-md-4">
    <div class="well">
      <dl class="dl-horizontal">
        <dt>Created at:</dt>
        <dd>{{ date('M j, Y h:ia',strtotime($post->created_at))}}</dd>
        <hr>
        <dt>Last Update at:</dt>
        <dd>{{ date('M j, Y h:ia',strtotime($post->updated_at))}} </dd>
        <hr>


        <div class="row">
          <div class="col-sm-6">
            {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class'=>'btn btn-primary btn-block')) !!}
          </div>
          <div class="col-sm-6">
            {!! Form::model($post,['route' => ['posts.destroy',$post->id],'method'=>'DELETE']) !!}

            {{ Form::submit('Delete', array('class'=>'btn btn-danger btn-block') ) }}
            {!! Form::close() !!}
          </div>
{{--
          <div class="col-sm-6">
            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary btn-block">Edit</a>
          </div>
          <div class="col-sm-6">
            <a href="{{ route('posts.destroy', $post->id) }}" class="btn btn-danger btn-block">Delete</a>
          </div> --}}

        </div>
        <hr>
        <div class="row">
          <div class="col-md-12">
            {!! Html::linkRoute('posts.index', 'Back to Posts', array(), array('class'=>'btn btn-primary btn-block btn-sm ')) !!}

          </div>

        </div>

      </dl>
    </div>

  </div>

</div>


@endsection
