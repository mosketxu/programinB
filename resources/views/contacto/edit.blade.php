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
                    <div class="card-header">
                    <h3 class="card-title">Editar contacto {{$contacto->empresa}}</h3>
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
                    <form method="POST" action="{{ route("empresa.update") }}">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="row">
                                <input type="hidden" name="id" id="id" value="{{$contacto->id}}">
                                <div class="form-group col">
                                    <label class="required" for="empresa">Nombre</label>
                                    <input class="form-control form-control-sm" type="text" name="empresa" id="name" value="{{ old('name', $contacto->empresa) }}" required>
                                </div>
                                <div class="form-group col">
                                    <label for="alias">Alias</label>
                                    <input class="form-control form-control-sm" type="text" name="alias" id="alias" value="{{ old('alias', $contacto->alias) }}" required>
                                </div>
                                <div class="form-group col-1">
                                    <label for="nif">Nif</label>
                                    <input class="form-control form-control-sm" type="text" name="nif" id="nif" value="{{ old('nif', $contacto->nif) }}">
                                </div>
                                <div class="form-group col-1    ">
                                    <label class="required" for="cliente">Cliente</label>
                                    <select class="form-control form-control-sm" name="cliente" id="cliente" required aria-placeholder="cliente">
                                        <option value="{{old('cliente','0')}}" {{$contacto->cliente=='0' ? 'selected' : '' }}>No</option>
                                        <option value="{{old('cliente','1')}}"  {{$contacto->cliente=='1' ? 'selected' : ''}}>Sí</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="required" for="tipoempresa">Tipo</label>
                                    <select class="form-control form-control-sm" name="tipoempresa" id="tipoempresa" required aria-placeholder="tipo">
                                        <option value="{{ $contacto->tipoempresa }}">{{ $contacto->tipoempresa }}</option>
                                        @foreach($tipoempresas as $tipoempresa)
                                            <option value="{{ $tipoempresa->tipoempresa }}">{{ $tipoempresa->tipoempresa }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-1">
                                    <label for="estado">Estado</label>
                                    <select class="form-control form-control-sm" name="estado" id="estado">
                                        <option value="{{old('estado','0')}}" {{$contacto->estado=='0' ? 'selected' : '' }}>Baja</option>
                                        <option value="{{old('estado','1')}}"  {{$contacto->estado=='1' ? 'selected' : ''}}>Activo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col">
                                    <label for="direccion">Dirección</label>
                                    <input class="form-control form-control-sm" type="text" name="direccion" id="direccion" value="{{ old('direccion', $contacto->direccion) }}">
                                </div>
                                <div class="form-group col-1">
                                    <label for="codpostal">Código Postal</label>
                                    <input class="form-control form-control-sm" type="text" name="codpostal" id="codpostal" value="{{ old('codpostal', $contacto->codpostal) }}">
                                </div>
                                <div class="form-group col">
                                    <label for="localidad">Localidad</label>
                                    <input class="form-control form-control-sm" type="text" name="localidad" id="localidad" value="{{ old('localidad', $contacto->localidad) }}">
                                </div>
                                <div class="form-group col-2">
                                    <label for="provincia_id">Provincia</label>
                                    <select class="form-control form-control-sm" name="provincia_id" id="provincia_id">
                                        @foreach($provincias as $id => $provincia)
                                        @if(!$contacto->provincia_id)
                                            <option value="">-- Selecciona --</option>
                                        @endif
                                            <option value="{{old('provincia_id',$provincia->id)}}"  {{ $provincia->provincia == $contacto->provincia['provincia'] ? 'selected' : '' }}>{{ $provincia->provincia }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-1">
                                    <label for="pais_id">País</label>
                                    <select class="form-control form-control-sm" name="pais_id" id="pais_id">
                                        @if(!$contacto->pais_id)
                                        <option value="">-- Selecciona --</option>
                                        @endif
                                        @foreach($paises as $pais)
                                            <option value="{{old('pais_id',$pais->id)}}"  {{ $pais->pais == $contacto->pais['pais'] ? 'selected' : '' }}>{{ $pais->pais }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-1">
                                    <label for="idioma">Idioma</label>
                                    <select class="form-control form-control-sm" name="idioma" id="idioma">
                                        <option value="{{old('idioma','ES')}}" {{$contacto->idioma=='ES' ? 'selected' : '' }}>ES</option>
                                        <option value="{{old('idioma','EN')}}"  {{$contacto->idioma=='EN' ? 'selected' : ''}}>EN</option>
                                        <option value="{{old('idioma','CA')}}"  {{$contacto->idioma=='CA' ? 'selected' : ''}}>CA</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-1">
                                    <label for="tfno">Teléfono</label>
                                    <input class="form-control form-control-sm" type="text" name="tfno" id="tfno" value="{{ old('tfno', $contacto->tfno) }}">
                                </div>
                                <div class="form-group col-2">
                                    <label for="emailgral">@ 1</label>
                                    <input class="form-control form-control-sm" type="text" name="emailgral" id="emailgral" value="{{ old('emailgral', $contacto->emailgral) }}">
                                </div>
                                <div class="form-group col-2">
                                    <label for="emailadm">@ 2</label>
                                    <input class="form-control form-control-sm" type="text" name="emailadm" id="emailadm" value="{{ old('emailadm', $contacto->emailadm) }}">
                                </div>
                                <div class="form-group col-2">
                                    <label for="web">Web</label>
                                    <input class="form-control form-control-sm" type="text" name="web" id="web" value="{{ old('web', $contacto->web) }}">
                                </div>
                                <div class="form-group col">
                                    <label for="observaciones">Observaciones</label>
                                    <input class="form-control form-control-sm" type="text" name="observaciones" id="observaciones" value="{{ old('observaciones', $contacto->observaciones) }}">
                                </div>
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

</script>
@endpush

