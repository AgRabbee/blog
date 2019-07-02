@extends('layouts.app')

@section('content')
    <h1>{{$pageTitle}}</h1>
    <p>This is Services page. Here anyone can find all the information about the services of the blog.</p>
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <h5>Our services</h5>
            <hr>
            @if(count($services) > 0)
                <ul class="list-group">
                    @foreach ($services as $service)
                        <li class="list-group-item">{{$service}}</li>
                    @endforeach
                </ul><br>
            @endif
        </div>
        <div class="col-md-6 col-sm-6">
            <h5>Our Team Members</h5>
            <hr>
            @if(count($TeamMember) > 0)
                <ul class="list-group">
                    @foreach ($TeamMember as $member)
                        <li class="list-group-item">{{$member}}</li>
                    @endforeach
                </ul>
            @else
                <p>No team member</p>
            @endif
        </div>
    </div>
@endsection
