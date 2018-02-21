@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome to Laravel!</h1>
        <p>This is a Laravel application.</p>
        <p>
            <a href="/login" class="btn btn-primary btn-lg">Login</a>
            <a href="/register" class="btn btn-success btn-lg">Register</a>
        </p>
    </div>
@endsection

