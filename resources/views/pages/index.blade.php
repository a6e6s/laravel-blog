@extends('layouts.app')
@section('content')
    <div class="jumbotron text-center">
        <h1 class="display-4">{{$title}}</h1>
        <p class="lead">This is my blog </p>
        <hr class="my-4">
        <p>
            <a href="/login" class="btn btn-primary" role="button">Login</a>
            <a href="/register" class="btn btn-success" role="button">Register</a>
        </p>
    </div>
@endsection