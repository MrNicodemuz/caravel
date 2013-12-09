@extends('layouts.master')

@section('content')

@foreach ($cars as $car)
<h1>{{$car->model}}</h1>
@endforeach
@stop