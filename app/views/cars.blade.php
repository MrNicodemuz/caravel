@extends('layouts.master')

@section('content')

@if ($query != '')
<h1>Search query: {{$query}}</h1>
@endif



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