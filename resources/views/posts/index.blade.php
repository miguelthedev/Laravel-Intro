@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0) 
        @foreach($posts as $post)
            <div class="card card-body mb-3">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{config('app.url')}}/storage/cover_images/{{$post->cover_image}}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <h3><a href="{{config('app.url')}}/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}} {{$post->user->name}}</small>
                    </div>
                </div>
                
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found.</p>
    @endif
@endsection