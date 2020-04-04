@extends('layouts.programin')

@section('title','Programin-Nuevo Contacto')
@section('titlePag','Crear contacto')
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
                    <div class="card-header">
                        <h3 class="card-title">Nueva empresa</h3>
                        <div class="card-tools">
                        </div>
                      </div>
                    </div>
                    {{-- mensajes de exito o error --}}
                    @include('layouts.partials.mensajes')
                    {{-- fin mensajes de exito o error --}}

                    <form method="POST" action="{{ route("empresa.store") }}">
                        @csrf
                        <div class="card-body">
                            <input type="hidden" name="tipoempresa" id="tipoempresa" value="Contacto">
                            <input type="hidden" name="estado" id="estado" value="1">
                            <input type="hidden" name="cliente" id="cliente" value="1">
                            <div class="row">
                                <div class="form-group col">
                                    <label class="required" for="empresa">Empresa</label>
                                    <input class="form-control" type="text" name="empresa" id="empresa" value="{{ old('empresa', '') }}" required>
                                </div>
                                <div class="form-group col">
                                    <label class="required" for="alias">Alias</label>
                                    <input class="form-control" type="text" name="alias" id="alias" value="{{ old('alias', '') }}" required>
                                </div>
                                <div class="form-group col-2">
                                    <label for="nif">Nif</label>
                                    <input class="form-control" type="text" name="nif" id="nif" value="{{ old('nif', '') }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col">
                                    <label for="direccion">Dirección</label>
                                    <input class="form-control" type="text" name="direccion" id="direccion" value="{{ old('direccion', '') }}">
                                </div>
                                <div class="form-group col-1">
                                    <label for="codpostal">Código Postal</label>
                                    <input class="form-control" type="text" name="codpostal" id="codpostal" value="{{ old('codpostal', '') }}">
                                </div>
                                <div class="form-group col">
                                    <label for="localidad">Localidad</label>
                                    <input class="form-control" type="text" name="localidad" id="localidad" value="{{ old('localidad', '') }}">
                                </div>
                                <div class="form-group col-2">
                                    <label for="provincia_id">Provincia</label>
                                    <select class="form-control" name="provincia_id" id="provincia_id">
                                        @foreach($provincias as $id => $provincia)
                                            <option value="{{ $id }}" {{ old('provincia_id') == $id ? 'selected' : '' }}>{{ $provincia->provincia }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-1">
                                    <label for="pais_id">País</label>
                                    <select class="form-control" name="pais_id" id="pais_id">
                                        @foreach($paises as $pais)
                                            <option value="{{ $pais->id }}" {{ old('pais_id') == $pais->id ? 'selected' : '' }}>{{ $pais->pais }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col">
                                    <label for="tfno">Teléfono</label>
                                    <input class="form-control" type="text" name="tfno" id="tfno" value="{{ old('tfno', '') }}">
                                </div>
                                <div class="form-group col">
                                    <label for="emailgral">@ 1</label>
                                    <input class="form-control" type="text" name="emailgral" id="emailgral" value="{{ old('emailgral', '') }}">
                                </div>
                                <div class="form-group col">
                                    <label for="emailadm">@ 2</label>
                                    <input class="form-control" type="text" name="emailadm" id="emailadm" value="{{ old('emailadm', '') }}">
                                </div>
                                <div class="form-group col">
                                    <label for="web">Web</label>
                                    <input class="form-control" type="text" name="web" id="web" value="{{ old('web', '') }}">
                                </div>
                                <div class="form-group col-1">
                                    <label for="idioma">Idioma</label>
                                    <select class="form-control" name="idioma" id="idioma">
                                        <option value="ES" {{ old('idioma') == "ES" ? 'selected' : '' }}>ES</option>
                                        <option value="EN" {{ old('idioma') == "EN" ? 'selected' : '' }}>EN</option>
                                        <option value="CA" {{ old('idioma') == "CA" ? 'selected' : '' }}>CA</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col">
                                    <label for="observaciones">Observaciones</label>
                                    <input class="form-control" type="text" name="observaciones" id="observaciones" value="{{ old('observaciones', '') }}">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Guardar</button>
                                <a class="btn btn-default" href="{{route('empresa.index')}}" title="Ir la página anterior">Volver</a>
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

