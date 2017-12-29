@extends('layouts.app')

@section('content')
  <h1>Edit Post</h1>
  {!! Form::open(['action' => ['PostsController@update', $post['id'] ], 'method' => 'POST']) !!}
  {{-- {!! Form::model($post, array('route' => array('posts.update', $post['id']), 'method' => 'PUT')) !!} --}}
  <div class="form-group">
    {{Form::label('title', 'Title', ['class' => 'control-label'])}}
    {{Form::text('title', $post['title'], ['class' => 'form-control', 'placeholder' => 'Title'])}}
  </div>
  <div class="form-group">
      {{Form::label('body', 'Body')}}
      {{Form::textarea('body', $post['body'], ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
  </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
  {!! Form::close() !!}

@endsection
