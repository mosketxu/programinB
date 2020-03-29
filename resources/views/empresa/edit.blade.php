@extends('layouts.programin')

@section('title','Programin-Editar Empresa')
@section('titlePag','Editar empresa')
@section('navbar')
    @include('layouts.partials.navbar')
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
                        <h3 class="card-title">Editar empresa</h3>
                        <div class="card-tools">
                        </div>
                      </div>
                    </div>
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <h6>Por favor, corrige los errores</h6>
                            @foreach ($errors->all() as $error)
                                <li> {{ $error }}</li>
                            @endforeach
                        </div>
                    @endif
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route("empresa.update",$empresa) }}">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col">
                                    <label class="required" for="name">Empresa</label>
                                    <input class="form-control" type="text" name="name" id="name" value="{{ old('name', $empresa->name) }}" required>
                                </div>
                                <div class="form-group col">
                                    <label for="alias">Alias</label>
                                    <input class="form-control" type="text" name="alias" id="alias" value="{{ old('alias', $empresa->alias) }}" required>
                                </div>
                                <div class="form-group col-2">
                                    <label for="nif">Nif</label>
                                    <input class="form-control" type="text" name="nif" id="nif" value="{{ old('nif', $empresa->nif) }}">
                                </div>
                                <div class="form-group col-2">
                                    <label class="required" for="tipoempresa">Tipo</label>
                                    <select class="form-control" name="tipoempresa" id="tipoempresa" required aria-placeholder="tipo">
                                        <option value="{{ $empresa->tipoempresa }}">{{ $empresa->tipoempresa }}</option>
                                        @foreach($tipoempresas as $tipoempresa)
                                            <option value="{{ $tipoempresa->tipoempresa }}">{{ $tipoempresa->tipoempresa }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-2">
                                    <label for="nif">Cuenta Contable</label>
                                    <input class="form-control" type="text" name="cuentacontable" id="cuentacontable" value="{{ old('cuentacontable', $empresa->cuentacontable) }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col">
                                    <label for="direccion">Dirección</label>
                                    <input class="form-control" type="text" name="direccion" id="direccion" value="{{ old('direccion', $empresa->direccion) }}">
                                </div>
                                <div class="form-group col-1">
                                    <label for="codpostal">Código Postal</label>
                                    <input class="form-control" type="text" name="codpostal" id="codpostal" value="{{ old('codpostal', $empresa->codpostal) }}">
                                </div>
                                <div class="form-group col">
                                    <label for="localidad">Localidad</label>
                                    <input class="form-control" type="text" name="localidad" id="localidad" value="{{ old('localidad', $empresa->localidad) }}">
                                </div>
                                <div class="form-group col-2">
                                    <label for="provincia_id">Provincia</label>
                                    <select class="form-control" name="provincia_id" id="provincia_id">
                                        <option value="{{ $empresa->provincia_id }}" >{{ $empresa->provincia->provincia ?? ''}}</option>
                                        @foreach($provincias as $id => $provincia)
                                            <option value="{{ $id }}">{{ $provincia->provincia }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-1">
                                    <label for="pais_id">País</label>
                                    <select class="form-control" name="pais_id" id="pais_id">
                                        <option value="{{$empresa->pais_id}}">{{ $empresa->pais->pais ?? ''}}
                                        @foreach($paises as $pais)
                                            <option value="{{ $pais->id }}" {{ old('pais_id') == $pais->id ? 'selected' : '' }}>{{ $pais->pais }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col">
                                    <label for="tfno">Teléfono</label>
                                    <input class="form-control" type="text" name="tfno" id="tfno" value="{{ old('tfno', $empresa->tfno) }}">
                                </div>
                                <div class="form-group col">
                                    <label for="emailgral">@ General</label>
                                    <input class="form-control" type="text" name="emailgral" id="emailgral" value="{{ old('emailgral', $empresa->emailgral) }}">
                                </div>
                                <div class="form-group col">
                                    <label for="emailadm">@ Administración</label>
                                    <input class="form-control" type="text" name="emailadm" id="emailadm" value="{{ old('emailadm', $empresa->emailadm) }}">
                                </div>
                                <div class="form-group col">
                                    <label for="web">Web</label>
                                    <input class="form-control" type="text" name="web" id="web" value="{{ old('web', $empresa->web) }}">
                                </div>
                                <div class="form-group col-1">
                                    <label for="idioma">Idioma</label>
                                    <select class="form-control" name="idioma" id="idioma">
                                        <option value="{{$empresa->idioma}}" >{{$empresa->idioma}}</option>
                                        <option value="ES" {{ old('idioma') == "ES" ? 'selected' : '' }}>ES</option>
                                        <option value="EN" {{ old('idioma') == "EN" ? 'selected' : '' }}>EN</option>
                                        <option value="CA" {{ old('idioma') == "CA" ? 'selected' : '' }}>CA</option>
                                    </select>
                                </div>
                                <div class="form-group col-1">
                                    <label for="estado">Estado</label>
                                    <select class="form-control" name="estado" id="estado">
                                        <option value="0" {{ old('estado') == "Activo" ? 'selected' : '' }}>Activo</option>
                                        <option value="1" {{ old('estado') == "Baja" ? 'selected' : '' }}>Baja</option>
                                    </select>
                                </div>
                                <div class="form-group col">
                                    <label for="observaciones">Observaciones</label>
                                    <input class="form-control" type="text" name="observaciones" id="observaciones" value="{{ old('observaciones', $empresa->observaciones) }}">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Actualizar</button>
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

