@extends('layouts.app')

@section('content')
    <h1>posts</h1>

    @if(count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card">
                <div class="card-body">
                    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <p>{!!$post->body!!}</p>
                    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                </div>
            </div><br>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found.</p>
    @endif
@endsection
