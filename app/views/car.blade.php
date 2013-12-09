@extends('layouts.master')

@section('content')
<div class="jumbotron car-jumbo">
    <img src="{{$car->foto_url}}" />
    <p>{{$car->model}} [ {{$car->year}} - {{$car->color}} ]</p>
</div>


@if(count($comments)>0)
<div class="panel panel-primary">
    <div class="panel-heading">
    @if(count($comments)>0)
      <h3 class="panel-title">Comments</h3>
    @else
      <h3 class="panel-title">Add the first Comment!</h3>
    @endif
    </div>
    <div class="panel-body">
        @if(count($comments)>0)
            <ul class="comments">
            @foreach ($comments as $comment)
                <li class="comment">
                    <p><span class="person">{{ $comment->username }}</span> @ {{ $comment->datetime }} said:</p>
                    <blockquote>
                        <p>{{ $comment->content }}</p>
                        @if ($comment->delete)
                            <a title="Delete comment" class="comment-delete" href="/deleteComment/{{$comment->id}}"><img src="{{asset('assets/images/delete.png')}}"/></a>
                        @endif
                    </blockquote>
                </li>
            @endforeach
            </ul>
        @endif

        <div class="panel panel-success">
            <div class="panel-heading">
                @if(count($comments)>0)
                  <h3 class="panel-title">Comment</h3>
                @else
                  <h3 class="panel-title">Add the first Comment!</h3>
                @endif
            </div>
            <div class="panel-body">
            @if(Auth::check())
                <form method='POST' action='/addComment' role="form">
                    <div class="form-group">
                        <input type='hidden' name='photoid' value='{{$car->id}}'/>
                        <div class="input-group">
                            <input type="text" name="content" class="form-control" />
                            <span class="input-group-btn">
                              <input type='submit' value='Comment' class="btn btn-default" />
                            </span>
                        </div>
                    </div>
                </form>
            @else
                <p><a role="button" class="btn btn-primary btn-lg" href="/user/create">Join Us! »</a> and share what you think of this car.</p>
            @endif
            </div>
        </div>
    </div>
</div>
@endif


@stop

