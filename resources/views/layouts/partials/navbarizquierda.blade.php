<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- BOTON OCULTAR -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>
  <!-- SEARCH FORM -->
  @if(explode(".", Route::currentRouteName())[1]=='index')
    <form class="form-inline ml-3" method="GET" action="{{route(Route::currentRouteName())}}">
      <div class="input-group input-group-sm">
        <input type="search" name="busca" value='{{$busqueda}}' class="form-control form-control-navbar"  placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
            </button>
          </div>
      </div>
    </form>
  @endif
