@extends('main')



@section('title', 'All Post')

@section('content')



<div class="row">
  <div class="col-md-10">
    <h3>All posts</h3>
  </div>
  <div class="col-md-2">
    <a href="{{ route('posts.create') }}" class="btn btn-md btn-block btn-primary buttoncreate">Create New Post</a>
  </div>
  <div class="col-md-12">
    <hr>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    {{-- i had an error here, instead of table i used div... --}}
    <table class="table table-hover">
      <thead>
        <th>#</th>
        <th>Title</th>
        <th>Body</th>
        <th>Created at</th>
        <th>Action</th>
      </thead>

      <tbody>
        @foreach ($posts as $post)
          <tr>
            <th>{{ $post->id }}</th>
            <td>{{ $post->title }}</td>
            <td>{{ substr($post->body,0,50) }}{{ strlen($post->body)>50 ? "..." : "" }}</td>
            {{-- <td>{{ date('M j, Y h:ia',strtotime($post->created_at))}}</td> --}}
            <td>{{ date('M j, Y ',strtotime($post->created_at))}}</td>
            <td> <a href="{{ route('posts.show', $post->id) }}" class="btn btn-default btn-sm">View</a> <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default btn-sm">Edit</a> </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>


</div>


@endsection
