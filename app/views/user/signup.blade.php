@extends('layouts.master')

@section('content')
    <h1>Register to Caravel, Yo!</h1>

    <p></p>

    {{ Confide::makeLoginForm()->render() }}
@stop