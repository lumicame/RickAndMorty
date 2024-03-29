<html>
<head>
<title>Rick And Morty</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
<body>
  @if(str_contains(Request::url(), 'databases'))
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{Route('charactes')}}">Rick And Morty</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link @if(Route::is('charactes.database')) active @endif" aria-current="page" href="{{Route('charactes.database')}}">Characters</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(Route::is('episodes.database')) active @endif" href="{{Route('episodes.database')}}">Episodies</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(Route::is('locations.database')) active @endif" href="{{Route('locations.database')}}">Locations</a>
        </li>

      </ul>
    </div>
  </div>
</nav>
  @else
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{Route('charactes')}}">Rick And Morty</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link @if(Route::is('charactes')) active @endif" aria-current="page" href="{{Route('charactes')}}">Characters</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(Route::is('episodes')) active @endif" href="{{Route('episodes')}}">Episodies</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(Route::is('locations')) active @endif" href="{{Route('locations')}}">Locations</a>
        </li>

      </ul>
    </div>
  </div>
</nav>
  @endif
    
<div class="container">
  @yield('container')
</div>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
@yield('script')
</html>