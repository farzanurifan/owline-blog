@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam, itaque sequi! Explicabo sunt tenetur expedita praesentium voluptates eligendi quis assumenda saepe, quidem fugiat, consectetur facere nihil vitae eius? Quo, sed.</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
        <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
    </div>
@endsection