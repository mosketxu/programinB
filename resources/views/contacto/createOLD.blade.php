@extends('layouts.programin')

@section('title','Programin-Crear Contacto')
@section('titlePag','Crear Contacto')
@section('navbar')
    @include('layouts.partials.navbarizquierda')
    @include('layouts.partials.navbarderecha')
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        {{-- content header --}}
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    {{-- <div class="col-sm-3 text-left pl-2"> --}}
                    <div class="col-auto">
                        <p class="h3 pt-2 text-dark">@yield('titlePag')</p>
                    </div>
                    <div class="col-auto mr-auto">
                    </div>
                    <div class="col-sm-3 text-right pr-2">
                    <a href="{{url()->previous()}}">Volver</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- - /.content-header --}}
        {{-- main content  --}}
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    {{-- <div class="card-header">
                      </div>
                    </div> --}}
                {{-- mensajes de exito o error --}}
                    @include('layouts.partials.mensajes')
                {{-- fin mensajes de exito o error --}}

                    <form method="POST" action="{{ route("contacto.store") }}">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col">
                                    <label class="required" for="nombre">Nombre</label>
                                    <input maxlength="50" class="form-control" type="text" name="nombre" id="nombre" value="{{ old('nombre', '') }}" required>
                                </div>
                                <div class="form-group col">
                                    <label for="apellido">Apellido</label>
                                    <input maxlength="50" class="form-control" type="text" name="apellido" id="apellido" value="{{ old('apellido', '') }}">
                                </div>
                                <div class="form-group col">
                                    <label for="cargo">Cargo</label>
                                    <input maxlength="50" class="form-control" type="text" name="cargo" id="cargo" value="{{ old('cargo', '') }}" >
                                </div>
                                <div class="form-group col">
                                    <label for="departamento">Departamento</label>
                                    <select class="form-control" name="departamento" id="departamento" aria-placeholder="tipo">
                                        @foreach($departamentos as $departamento)
                                            {{-- <option value="{{ $departamento->departamento }}">{{ $departamento->departamento }}</option> --}}
                                            <option value="{{ $departamento->departamento }}" {{ old('departamento') == $departamento->id ? 'selected' : '' }}>{{ $departamento->departamento }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-2">
                                    <label for="nif">Nif</label>
                                    <input maxlength="15" class="form-control" type="text" name="nif" id="nif" value="{{ old('nif', '') }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-2">
                                    <label for="tfno">Tfno.</label>
                                    <input maxlength="15" class="form-control" type="text" name="tfno" id="tfno" value="{{ old('tfno', '') }}">
                                </div>
                                <div class="form-group col-2">
                                    <label for="movil">Móvil</label>
                                    <input maxlength="15" class="form-control" type="text" name="movil" id="movil" value="{{ old('movil', '') }}">
                                </div>
                                <div class="form-group col">
                                    <label for="email">@ </label>
                                    <input maxlength="100" class="form-control" type="email" name="email" id="email" value="{{ old('email', '') }}">
                                </div>
                                <div class="form-group col">
                                    <label for="email2">@ 2</label>
                                    <input maxlength="100" class="form-control" type="email" name="email2" id="email2" value="{{ old('email2', '') }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-4">
                                    <label for="direccion">Dirección</label>
                                    <input maxlength="150" class="form-control" type="text" name="direccion" id="direccion" value="{{ old('direccion', '') }}">
                                </div>
                                <div class="form-group col-1">
                                    <label for="cp">Código Postal</label>
                                    <input maxlength="10" class="form-control" type="text" name="cp" id="cp" value="{{ old('cp', '') }}">
                                </div>
                                <div class="form-group col-2">
                                    <label for="poblacion">Localidad</label>
                                    <input class="form-control" type="text" name="poblacion" id="poblacion" value="{{ old('poblacion', '') }}">
                                </div>
                                <div class="form-group col">
                                    <label maxlength="255" for="observaciones">Observaciones</label>
                                    <input class="form-control" type="text" name="observaciones" id="observaciones" value="{{ old('observaciones', '') }}">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Guardar</button>
                                <a class="btn btn-default" href="{{route('contacto.index')}}" title="Ir la página anterior">Volver</a>
                            </div>
                
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scriptchosen')
<script>

</script>
@endpush

