@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action' => 'PostController@store', 'method'=>'POST']) !!}
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" for="title" name="title" placeholder="Type your title">
    </div>
    <div class="form-group">
        <label for="body">Body</label>
        <textarea name="body" rows="8" cols="80" id="article-ckeditor" class="form-control" placeholder="Type your post here..."></textarea>
    </div>
    <input type="submit" class="btn btn-primary" name="submit" value="Submit">
    {!! Form::close()!!}
@endsection
