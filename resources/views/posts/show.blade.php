@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-outline-secondary">Go Back</a>
    <br>
    <br>
    <h1>{{$post->title}}</h1>
    <div class="">
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>

    <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-secondary">Edit</a>

    {!!Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'class' =>'float-right'])!!}
        @method('DELETE')
        <input type="submit" name="" value="Delete" class="btn btn-danger">
    {!!Form::close()!!}
@endsection
