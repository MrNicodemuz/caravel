@extends('layouts.master')

@section('content')
    <h1>Login to Caravel, Yo!</h1>

    <p>Takes only 10 secs, Yo!</p>

    <form method="POST" action="{{{ Confide::checkAction('UserController@do_login') ?: URL::to('/user/login') }}}" accept-charset="UTF-8" role="form">
        <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
        <fieldset>
            <div class="form-group">
                <label for="email">{{{ Lang::get('confide::confide.username_e_mail') }}}</label>
                <input class="form-control" tabindex="1" placeholder="{{{ Lang::get('confide::confide.username_e_mail') }}}" type="text" name="email" id="email" value="{{{ Input::old('email') }}}">
            </div>
            <div class="form-group">
                <label for="password">{{{ Lang::get('confide::confide.password') }}}</label>
                <input class="form-control" tabindex="2" placeholder="{{{ Lang::get('confide::confide.password') }}}" type="password" name="password" id="password">
            </div>
            <!--
            <div class="form-group">
                <label for="remember" class="checkbox">{{{ Lang::get('confide::confide.login.remember') }}}
                    <input type="hidden" name="remember" value="0">
                    <input tabindex="4" type="checkbox" name="remember" id="remember" value="1">
                </label>
            </div>
            -->
            @if ( Session::get('error') )
                <div class="alert alert-error">{{{ Session::get('error') }}}</div>
            @endif

            @if ( Session::get('notice') )
                <div class="alert">{{{ Session::get('notice') }}}</div>
            @endif
            <div class="form-group">
                <button tabindex="3" type="submit" class="btn btn-default">{{{ Lang::get('confide::confide.login.submit') }}}</button>
            </div>
        </fieldset>
    </form>

@stop