@extends('layouts.programin')

@section('title','Programin-Nuevo Prov-Cli')
@section('titlePag','Crear Prov-Cli')
@section('navbar')
    @include('layouts.partials.navbarizquierda')
    <p class="h3 pt-2 text-dark">@yield('titlePag')</p>
    @include('layouts.partials.navbarderecha')
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        {{-- content header --}}
        <div class="content-header">
            {{-- <div class="container-fluid">
            </div> --}}
        </div>
        {{-- - /.content-header --}}
        {{-- main content  --}}
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    {{-- <div class="card-header">
                    </div> --}}

                    {{-- mensajes de exito o error --}}
                    @include('layouts.partials.mensajes')
                    {{-- fin mensajes de exito o error --}}


                    <form method="POST" action="{{ route("provcli.store") }}">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col">
                                    <label class="required" for="nombre">Nombre</label>
                                    <input class="form-control" type="text" name="nombre" id="nombre" value="{{ old('nombre', '') }}" required>
                                </div>
                                <div class="form-group col-2">
                                    <label for="nif">Nif</label>
                                    <input class="form-control" type="text" name="nif" id="nif" value="{{ old('nif', '') }}">
                                </div>
                                <div class="form-group col-1">
                                    <label for="codpostal">Código Postal</label>
                                    <input class="form-control" type="text" name="codpostal" id="codpostal" value="{{ old('codpostal', '') }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col">
                                    <label for="localidad">Localidad</label>
                                    <input class="form-control" type="text" name="localidad" id="localidad" value="{{ old('localidad', '') }}">
                                </div>
                                <div class="form-group col-2">
                                    <label for="provincia_id">Provincia</label>
                                    <select class="form-control" name="provincia_id" id="provincia_id">
                                        <option value="08">Barcelona</option>
                                        @foreach($provincias as $provincia)
                                            <option value="{{ $provincia->id }}">{{ $provincia->provincia }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-2">
                                    <label for="pais_id">País</label>
                                    <select class="form-control" name="pais_id" id="pais_id">
                                        <option value="ES" >España</option>
                                        @foreach($paises as $pais)
                                            <option value="{{ $pais->id }}" >{{ $pais->pais }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col">
                                    <label for="tfno">Teléfono</label>
                                    <input class="form-control" type="text" name="tfno" id="tfno" value="{{ old('tfno', '') }}">
                                </div>
                                <div class="form-group col">
                                    <label for="email">@</label>
                                    <input class="form-control" type="text" name="email" id="emailgral" value="{{ old('email', '') }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col">
                                    <label for="banco1">Banco 1</label>
                                    <input class="form-control" type="text" name="banco1" id="banco1" value="{{ old('banco1', '') }}">
                                </div>
                                <div class="form-group col">
                                    <label for="iban1">Iban 1</label>
                                    <input class="form-control" type="text" name="iban1" id="iban1" value="{{ old('iban1', '') }}">
                                </div>
                                <div class="form-group col">
                                    <label for="banco2">Banco 2</label>
                                    <input class="form-control" type="text" name="banco2" id="banco2" value="{{ old('banco2', '') }}">
                                </div>
                                <div class="form-group col">
                                    <label for="iban2">Iban 2</label>
                                    <input class="form-control" type="text" name="iban2" id="iban2" value="{{ old('iban2', '') }}">
                                </div>
                                <div class="form-group col">
                                    <label for="observaciones">Observaciones</label>
                                    <input class="form-control" type="text" name="observaciones" id="observaciones" value="{{ old('observaciones', '') }}">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Guardar</button>
                                <a class="btn btn-default" href="{{route('provcli.index')}}" title="Ir la página anterior">Volver</a>
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

