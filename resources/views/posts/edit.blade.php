@extends('layouts.app')

@section('content')
    <h1>Edit Posts</h1>
    {!! Form::open(['action' => ['PostController@update',$post->id], 'method'=>'POST']) !!}
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" value="{{$post->title}}" for="title" name="title" placeholder="Type your title">
    </div>
    <div class="form-group">
        <label for="body">Body</label>
        <textarea name="body" rows="8" cols="80" id="article-ckeditor" class="form-control" placeholder="Type your post here...">{!!$post->body!!}</textarea>
    </div>
    @method('PUT')
    <input type="submit" class="btn btn-primary" name="submit" value="Submit">
    {!! Form::close()!!}
@endsection
