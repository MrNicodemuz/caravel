@extends('layouts.master')

@section('content')

<div class="row cars">
@foreach ($models as $model)
    <div class="col-xs-6 col-md-3">
        <div class="thumbnail car">
            <a href="/search/{{$model->model}}">
                <img src="{{$model->foto_url}}">
            </a>
            <a href="/search/{{$model->model}}" class="model">{{$model->model}}</a>
            <a href="/search/{{$model->model}}" class="ncomments">{{$model->comments}}</a>
        </div>
    </div>
@endforeach
</div>

@stop