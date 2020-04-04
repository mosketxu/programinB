@extends('layouts.programin')

@section('title','Programin-Editar Contacto')
@section('titlePag','Editar Contacto')
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

                    <form method="POST" action="{{ route("contacto.update",$contacto) }}">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col">
                                    <label class="required" for="nombre">Nombre</label>
                                    <input class="form-control" type="text" name="nombre" id="nombre" value="{{ old('nombre', $contacto->nombre) }}" required>
                                </div>
                                <div class="form-group col">
                                    <label for="apellido">Apellido</label>
                                    <input class="form-control" type="text" name="apellido" id="apellido" value="{{ old('apellido', $contacto->apellido) }}">
                                </div>
                                <div class="form-group col">
                                    <label for="cargo">Cargo</label>
                                    <input class="form-control" type="text" name="cargo" id="cargo" value="{{ old('cargo', $contacto->cargo) }}" >
                                </div>
                                <div class="form-group col">
                                    <label for="departamento">Departamento</label>
                                    <select class="form-control" name="departamento" id="departamento" aria-placeholder="tipo">
                                        <option value="{{ $contacto->departamento }}">{{ $contacto->departamento }}</option>
                                        @foreach($departamentos as $departamento)
                                            <option value="{{ $departamento->departamento }}">{{ $departamento->departamento }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-2">
                                    <label for="nif">Nif</label>
                                    <input class="form-control" type="text" name="nif" id="nif" value="{{ old('nif', $contacto->nif) }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-2">
                                    <label for="tfno">Tfno.</label>
                                    <input class="form-control" type="text" name="tfno" id="tfno" value="{{ old('tfno', $contacto->tfno) }}">
                                </div>
                                <div class="form-group col-2">
                                    <label for="movil">Móvil</label>
                                    <input class="form-control" type="text" name="movil" id="movil" value="{{ old('movil', $contacto->movil) }}">
                                </div>
                                <div class="form-group col">
                                    <label for="emailgral">@ </label>
                                    <input class="form-control" type="text" name="email" id="email" value="{{ old('email', $contacto->email) }}">
                                </div>
                                <div class="form-group col">
                                    <label for="emailadm">@ 2</label>
                                    <input class="form-control" type="text" name="email2" id="email2" value="{{ old('email2', $contacto->email2) }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-4">
                                    <label for="direccion">Dirección</label>
                                    <input class="form-control" type="text" name="direccion" id="direccion" value="{{ old('direccion', $contacto->direccion) }}">
                                </div>
                                <div class="form-group col-1">
                                    <label for="cp">Código Postal</label>
                                    <input class="form-control" type="text" name="cp" id="cp" value="{{ old('cp', $contacto->cp) }}">
                                </div>
                                <div class="form-group col-2">
                                    <label for="poblacion">Localidad</label>
                                    <input class="form-control" type="text" name="poblacion" id="poblacion" value="{{ old('poblacion', $contacto->poblacion) }}">
                                </div>
                                <div class="form-group col">
                                    <label for="observaciones">Observaciones</label>
                                    <input class="form-control" type="text" name="observaciones" id="observaciones" value="{{ old('observaciones', $contacto->observaciones) }}">
                                </div>
                            </div>
                            <div class="row">
                                <label for="empresas">Selecciona las empresas realcionadas con el contacto</label>
                                <select class="form-control" name="empresa[]" id="empresas" multiple="multiple">
                                    @foreach($empresas as $empresa)
                                        <option value="{{$empresa->id}}">{{$empresa->empresa}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Actualizar</button>
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
    $(document).ready(function(){
        $('#empresas').select2({
            placeholder :"Selecciona empresas",
            tags:true,
            allowClear:true
        });
    });

</script>
@endpush

