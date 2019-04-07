<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'MyPortfolio Site')</title>

        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    </head>
    

<header>
 <!-- Custom Navbar Header -->
    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
          <div class="bg-dark p-4">
            <h4 class="text-white">Vincent Roeland</h4>
            <span class="text-muted">De Solicitatie</span>
              <hr>
            <ul class="nav navbar-nav">
              <li><a href="/">HomePage</a></li>
              <li><a href="/dashboard">Dashboard</a></li>
              <li><a href="#">Profiel</a></li>
              <li><a href="/motivatie">Motivatie</a></li>
              <li><a href="/contact">Beroepsbeeld</a></li>
            </ul>
          </div>
        </div>
        <nav class="navbar navbar-dark bg-dark">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </nav>
      </div>
    <!-- Custom Navbar Header -->
</header>


<body class="container">
    @yield('content')

        @include('layoutFooter')



</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> 

</html>

