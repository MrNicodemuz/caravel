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
    <a class="navbar-brand" href="/">Caravel</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="caravel-menu-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="/">Home</a></li>
      <li><a href="/models">By Models</a></li>
      <li><a href="#">By Year</a></li>
    </ul>

    <form class="navbar-form navbar-left" role="search" action="/search/">
      <div class="form-group">
        <input name="q" type="text" class="form-control" placeholder="Search for your dream car">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>

    <div class=" navbar-right">
      @if(Auth::check())
      <div class="nav navbar-nav navbar-upload">
          <a class="btn btn-success navbar-btn" role="button" href="/car/new">Upload!</a>
      </div>
      @endif
      <ul class="nav navbar-nav">
        @if(Auth::check())
        <li class="dropdown">
          <a href="#userMenu" class="dropdown-toggle" data-toggle="dropdown">Hello {{ Auth::user()->username }}! <b class="caret"></b></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="/mycars/{{ Auth::user()->id }}">My Cars</a></li>
            <li class="divider"></li>
            <li><a href="/user/logout">Logout</a></li>
          </ul>
        </li>
        @else
          <li><a href="/user/login">Login</a></li>
          <li><a href="/user/create">Register</a></li>
        @endif
      </ul>
    </div>

  </div><!-- /.navbar-collapse -->
</div>
</nav>


    <div class="container">
        @yield('content')
    </div>

    <div id="footer">
    <footer class="container">
      <p>&copy; Caravel 2013</p>
    </footer>
    </div>

    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/caravel.js"></script>
</body>
</html>
