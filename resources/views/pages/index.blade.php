@extends('layout.app')
@section('content')
<div class="jumbotron text-center">
    <h1 class="display-3"><h1>{{$title}}</h1></h1>
    <p class="lead">Website untuk WebProg <i class="fa fa-heart" aria-hidden="true"></i></p>
    <hr class="my-2">
    <p>Choose one: </p>
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
        <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
    </p>
</div>
@endsection
