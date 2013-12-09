@extends('layouts.master')

@section('content')
<div class="jumbotron home-jumbo">
    <div class="container">
        <h1>Welcome to Caravel!</h1>
        <p>Cars, Dream cars everywhere!</p>
        @if(Auth::check())
            <!-- nada -->
        @else
            <p><a role="button" class="btn btn-primary btn-lg" href="/user/create">Join Us! »</a></p>
        @endif
    </div>
</div>

<div class="row cars">
@foreach ($cars as $car)
    <div class="col-xs-6 col-md-3">
        <div class="thumbnail car">
            <a href="/car/{{$car->id}}">
                <img src="{{$car->foto_url}}">
            </a>
            <a href="/car/{{$car->id}}" class="model">{{$car->model}}</a>
            <a href="/car/{{$car->id}}" class="year">{{$car->year}}</a>
            <a href="/car/{{$car->id}}" class="ncomments">{{$car->comments}}</a>
        </div>
    </div>
@endforeach
</div>
@stop