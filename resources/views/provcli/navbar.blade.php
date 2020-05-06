    <!-- Left navbar links -->
  <ul class="navbar-nav">
    {{-- @if(explode(".", Route::currentRouteName())[1]=='edit') --}}
      <li class="nav-item d-none d-sm-inline-block">
        @can('empresas.index')
            <a href="{{route('provcli.index') }}" class="nav-link" title="Editar Prov/Cli">Proveedores</a>
        @endcan
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        @can('empresas.edit')
            <a href="{{route('provcli.edit', $provcli) }}" class="nav-link" title="Editar prov/cli">Editar Prov/Cli</a>
        @endcan
      </li>
    {{-- @endif --}}
  </ul>
  
