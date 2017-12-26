@extends('layouts.app')

@section('content')
  <h1>Creates Post</h1>
  {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
  <div class="form-group">
    {{Form::label('title', 'Title', ['class' => 'control-label'])}}
    {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
  </div>
  <div class="form-group">
      {{Form::label('body', 'Body')}}
      {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
  </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
  {!! Form::close() !!}

@endsection