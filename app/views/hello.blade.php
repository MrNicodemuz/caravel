@extends('layouts.master')

@section('content')
<div class="jumbotron">
    <div class="container">
        <h1>Welcome to Caravel!</h1>
        <p>Cars, Dream cars everywhere!</p>
        <p><a role="button" class="btn btn-primary btn-lg" href="/user/create">Join Us! »</a></p>
    </div>
</div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Fast cars?!</h2>
          <p>We got them.</p>
          <p><a role="button" href="#" class="btn btn-default">View Fast cars »</a></p>
        </div>
        <div class="col-md-4">
          <h2>Red Cars?!</h2>
          <p>We got them.</p>
          <p><a role="button" href="#" class="btn btn-default">View Red cars »</a></p>
       </div>
        <div class="col-md-4">
          <h2>Fiat Puntos?!</h2>
          <p>GTFO!</p>
          <p><a role="button" href="http://www.zara.com" class="btn btn-default">Go to zara.com »</a></p>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; Caravel 2013</p>
      </footer>
    </div>
@stop