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
  
