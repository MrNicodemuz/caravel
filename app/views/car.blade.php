@extends('layouts.master')

@section('content')
    
    {{$car->model}}

    <br></br>

    <img src="car-1.jpg"></img>

    @foreach ($comments as $comment)
        <p>{{ $comment->content }} [ {{ $comment->username }} - {{ $comment->datetime }} ]</p>
    @endforeach

    <form method='POST' action='/addComment'>
        <input type='text' name='content'/>
        <input type='hidden' name='photoid' value='{{$car->id}}'/>
        <input type='submit' value='Submit'/>
    </form>

@stop