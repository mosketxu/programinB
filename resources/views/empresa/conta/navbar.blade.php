      <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item d-none d-sm-inline-block">
          @can('contas.index')
          <a href="{{route('conta.show',[$empresa,'R']) }}" class="nav-link" title="Recibidas">Recibidas</a>
          @endcan
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          @can('contas.index')
          <a href="{{route('conta.show',[$empresa,'E']) }}" class="nav-link" title="Recibidas">Emitidas</a>
          @endcan
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li>
        <form class="form-inline ml-3" method="GET" action="{{route('conta.index',$empresa)}}">
          <div class="input-group input-group-sm">
            <input type="search" name="busca" value='{{$busqueda}}' class="form-control form-control-navbar"  placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit"><i class="fas fa-search"></i>
                </button>
            </div>
          </div>
        </form>
      </li>
    <!-- Previous -->
      <li class="nav-link">
        <a href="{{url()->previous()}}" title="Volver atrás"><i class="fas fa-backward"></i></a>
      </li>
    </ul>
  </nav>
  
