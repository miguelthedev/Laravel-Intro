@extends('layouts.app')

@section('content')

    <a href="{{config('app.url')}}/posts" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>
    <div>
        {{$post->body}}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    
@endsection