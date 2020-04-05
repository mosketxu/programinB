    <!-- Left navbar links -->
  <ul class="navbar-nav">
    {{-- @if(explode(".", Route::currentRouteName())[1]=='edit') --}}
      <li class="nav-item d-none d-sm-inline-block">
        @can('empresas.index')
            <a href="{{route('empresa.index') }}" class="nav-link" title="Editar empresa">Empresas</a>
        @endcan
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        @can('empresas.edit')
            <a href="{{route('empresa.edit', $empresa) }}" class="nav-link" title="Editar empresa">Editar Empresa</a>
        @endcan
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        @can('contactos.index')
          <a href="{{route('empresacontacto.show', $empresa) }}" class="nav-link" title="Contacto de la empresa">Contactos</a>
        @endcan
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        @can('pus.index')
          <a href="{{route('pu.show', $empresa) }}" class="nav-link" title="Contacto de la empresa">Pus</a>
        @endcan
      </li>
    {{-- @endif --}}
  </ul>
  
