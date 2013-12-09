@extends('layouts.master')

@section('content')

@if ($query != '')
<h1>Search query: {{$query}}</h1>
@endif

<ul class="cars">
@foreach ($cars as $car)
    <li class="car">
        <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcScYQn3ifo2VYyEu63F_mD42z_CJkXwYfusLK00QLjQAHXRHfxy">
        <a href="/car/{{$car->id}}" class="model">{{$car->model}}</a>
        <a href="/car/{{$car->id}}" class="year">{{$car->year}}</a>
        <a href="/car/{{$car->id}}" class="ncomments">{{$car->comments}}</a>
    </li>
@endforeach
</ul>

@stop