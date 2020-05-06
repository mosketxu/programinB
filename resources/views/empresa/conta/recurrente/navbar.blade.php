      <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{route('conta.index',$empresa) }}" class="nav-link" title="Go">Go</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{route('conta.contas',[$empresa,'E']) }}" class="nav-link" title="Recibidas">Emitidas</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{route('conta.contas',[$empresa,'R']) }}" class="nav-link" title="Recibidas">Recibidas</a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
    <!-- Previous -->
      <li class="nav-link">
        <a href="{{url()->previous()}}" title="Volver atrás"><i class="fas fa-backward"></i></a>
      </li>
    </ul>
  </nav>
  
