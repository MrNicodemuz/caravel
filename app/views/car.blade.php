@extends('layouts.master')

@section('content')
    
    <img src="{{$car->foto_url}}" width="400"></img>
    <p>{{$car->model}} [ {{$car->year}} - {{$car->color}} ]</p>

    @foreach ($comments as $comment)
        <p>{{ $comment->content }} [ {{ $comment->username }} - {{ $comment->datetime }} ]</p>
    @endforeach

    <form method='POST' action='/addComment'>
        <input type='text' name='content'/>
        <input type='hidden' name='photoid' value='{{$car->id}}'/>
        <input type='submit' value='Submit'/>
    </form>

@stop