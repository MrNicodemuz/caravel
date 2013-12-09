@extends('layouts.master')

@section('content')
    
    <img src="{{$car->foto_url}}" width="400"></img>
    <p>{{$car->model}} [ {{$car->year}} - {{$car->color}} ]</p>

    @foreach ($comments as $comment)
        <p>{{ $comment->content }} [ {{ $comment->email }} - {{ $comment->username }} - {{ $comment->datetime }} ] @if ($comment->delete)<a href="/deleteComment/{{$comment->id}}"><img src="{{asset('assets/images/delete.png')}}"/></a>@endif</p>
    @endforeach

    <form method='POST' action='/addComment'>
        <input type='text' name='content'/>
        <input type='hidden' name='photoid' value='{{$car->id}}'/>
        <input type='submit' value='Submit'/>
    </form>

@stop