@extends('layouts.master')

@section('content')
    <h1>Upload a new car pic!</h1>

    <p>Takes only 10 secs, Yo!</p>

    <form method="POST" action="{{{ URL::to('/car/new') }}}" accept-charset="UTF-8" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
        <fieldset>
            <div class="form-group">
                <label for="model">Model</label>
                <input class="form-control" tabindex="1" type="text" name="model" id="model">
            </div>
            <div class="form-group">
                <label for="year">Year</label>
                <input class="form-control" tabindex="2" type="text" name="year" id="year">
            </div>
            <div class="form-group">
                <label for="color">Color</label>
                <input class="form-control" tabindex="2" type="text" name="color" id="color">
            </div>
            <div class="form-group">
                <label for="photo">Photo</label>
                <input class="form-control" tabindex="2" type="file" name="photo" id="photo">
            </div>
            <div class="form-group">
                <button tabindex="3" type="submit" class="btn btn-default">Add Photo!</button>
            </div>
        </fieldset>
    </form>

@stop