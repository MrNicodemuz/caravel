@extends('layouts.master')

@section('content')
    
    {{$car->model}}

    <br></br>

    <img src="car-1.jpg"></img>

    @foreach ($comments as $comment)
        <p>{{ $comment->content }}</p>
    @endforeach

    <form method='POST' action='/addComment'>
        <input type='text' name='content'/>
        <input type='hidden' name='photoid' value='{{$car->id}}'/>
        <input type='hidden' name='userid' value='1'/>
        <input type='submit' value='Submit'/>
    </form>

@stop