@extends('main')

@section('stylesheet')
  <link rel="stylesheet" href="/css/master.css">
@endsection

@section('title', 'Edit Post')

@section('content')

<h3>Create post here!!</h3>
<div class="row">
  {!! Form::model($post,['route' => ['posts.update',$post->id],'method'=>'PUT']) !!}

  <div class="col-md-8">
    {{-- title goes here... --}}
    {{ Form::label('title', 'Title:')}}
    {{ Form::text('title', null, array('class'=>'form-control ', 'placeholder'=>'Enter your post title here...')) }}

    {{ Form::label('slug', 'Slug:'),array('class'=>'form-spacing-top') }}
    {{ Form::text('slug', null, array('class'=>'form-control ', 'placeholder'=>'Enter your post title here...')) }}

    {{ Form::label('body', 'Post Body:', array('class'=>'form-spacing-top')) }}
    {{ Form::textarea('body', null, array('class'=>'form-control', 'placeholder'=>'Enter your post here...')) }}
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
            {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class'=>'btn btn-danger btn-block')) !!}
          </div>
          <div class="col-sm-6">
            {!! Form::submit('Save Changes', array('class'=>'btn btn-success btn-block')) !!}

          </div>


        </div>


      </dl>
    </div>

  </div>
 {!! Form::close() !!}
</div>


@endsection
