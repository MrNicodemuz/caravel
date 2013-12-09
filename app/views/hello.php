<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CARavel</title>
    <link rel="stylesheet" href="/assets/css/caravel.compiled.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>


<nav class="navbar navbar-default" role="navigation">
<div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#caravel-menu-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Caravel</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="caravel-menu-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">By Cars</a></li>
      <li><a href="#">By Year</a></li>
    </ul>

    <form class="navbar-form navbar-left" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search for your dream car">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#userMenu" class="dropdown-toggle" data-toggle="dropdown">Hello User! <b class="caret"></b></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">My Deteils</a></li>
          <li><a href="#">My Cars</a></li>
          <li class="divider"></li>
          <li><a href="#">Logout</a></li>
        </ul>
      </li>
    </ul>
  </div><!-- /.navbar-collapse -->
</div>
</nav>

<div class="jumbotron">
    <div class="container">
        <h1>Welcome to Caravel!</h1>
        <p>Cars, Dream cars everywhere!</p>
        <p><a role="button" class="btn btn-primary btn-lg">Join Us! »</a></p>
    </div>
</div>

<div class="container">
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





    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/caravel.js"></script>
</body>
</html>
