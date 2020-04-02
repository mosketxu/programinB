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
                    <form method="POST" action="{{ route("empresa.update") }}">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col">
                                    <input hidden class="form-control-plaintext" type="text" name="id" id="id" value="{{$empresa->id}}">
                                    <label class="required" for="name">Empresa</label>
                                    <input class="form-control form-control-sm" type="text" name="empresa" id="name" value="{{ old('name', $empresa->empresa) }}" required>
                                </div>
                                <div class="form-group col">
                                    <label for="alias">Alias</label>
                                    <input class="form-control form-control-sm" type="text" name="alias" id="alias" value="{{ old('alias', $empresa->alias) }}" required>
                                </div>
                                <div class="form-group col-1">
                                    <label for="nif">Nif</label>
                                    <input class="form-control form-control-sm" type="text" name="nif" id="nif" value="{{ old('nif', $empresa->nif) }}">
                                </div>
                                <div class="form-group col-1    ">
                                    <label class="required" for="cliente">Cliente</label>
                                    <select class="form-control form-control-sm" name="cliente" id="cliente" required aria-placeholder="cliente">
                                        <option value="{{old('cliente','0')}}" {{$empresa->cliente=='0' ? 'selected' : '' }}>No</option>
                                        <option value="{{old('cliente','1')}}"  {{$empresa->cliente=='1' ? 'selected' : ''}}>Sí</option>
                                    </select>
                                </div>
                                <div class="form-group col-1">
                                    <label class="required" for="tipoempresa">Tipo</label>
                                    <select class="form-control form-control-sm" name="tipoempresa" id="tipoempresa" required aria-placeholder="tipo">
                                        <option value="{{ $empresa->tipoempresa }}">{{ $empresa->tipoempresa }}</option>
                                        @foreach($tipoempresas as $tipoempresa)
                                            <option value="{{ $tipoempresa->tipoempresa }}">{{ $tipoempresa->tipoempresa }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-1">
                                    <label for="estado">Estado</label>
                                    <select class="form-control form-control-sm" name="estado" id="estado">
                                        <option value="{{old('estado','0')}}" {{$empresa->estado=='0' ? 'selected' : '' }}>No</option>
                                        <option value="{{old('estado','1')}}"  {{$empresa->estado=='1' ? 'selected' : ''}}>Sí</option>
                                    </select>
                                </div>
                                <div class="form-group col-1">
                                    <label for="cuentacontable">Cuenta Contable</label>
                                    <input class="form-control form-control-sm" type="text" name="cuentacontable" id="cuentacontable" value="{{ old('cuentacontable', $empresa->cuentacontable) }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col">
                                    <label for="direccion">Dirección</label>
                                    <input class="form-control form-control-sm" type="text" name="direccion" id="direccion" value="{{ old('direccion', $empresa->direccion) }}">
                                </div>
                                <div class="form-group col-1">
                                    <label for="codpostal">Código Postal</label>
                                    <input class="form-control form-control-sm" type="text" name="codpostal" id="codpostal" value="{{ old('codpostal', $empresa->codpostal) }}">
                                </div>
                                <div class="form-group col">
                                    <label for="localidad">Localidad</label>
                                    <input class="form-control form-control-sm" type="text" name="localidad" id="localidad" value="{{ old('localidad', $empresa->localidad) }}">
                                </div>
                                <div class="form-group col-2">
                                    <label for="provincia_id">Provincia</label>
                                    <select class="form-control form-control-sm" name="provincia_id" id="provincia_id">
                                        {{-- <option value="{{ $empresa->provincia_id }}" >{{ $empresa->provincia->provincia ?? ''}}</option> --}}
                                        @foreach($provincias as $id => $provincia)
                                            <option value="{{old('provincia_id',$provincia->id)}}"  {{ $provincia->provincia == $empresa->provincia->provincia ? 'selected' : '' }}>{{ $provincia->provincia }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-1">
                                    <label for="pais_id">País</label>
                                    <select class="form-control form-control-sm" name="pais_id" id="pais_id">
                                        @foreach($paises as $pais)
                                            <option value="{{old('pais_id',$pais->id)}}"  {{ $pais->pais == $empresa->pais->pais ? 'selected' : '' }}>{{ $pais->pais }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-1">
                                    <label for="idioma">Idioma</label>
                                    <select class="form-control form-control-sm" name="idioma" id="idioma">
                                        <option value="{{old('idioma','ES')}}" {{$empresa->idioma=='ES' ? 'selected' : '' }}>ES</option>
                                        <option value="{{old('idioma','EN')}}"  {{$empresa->idioma=='EN' ? 'selected' : ''}}>EN</option>
                                        <option value="{{old('idioma','CA')}}"  {{$empresa->idioma=='CA' ? 'selected' : ''}}>CA</option>
                                    </select>
                                </div>
                                <div class="form-group col-1">
                                    <label for="iva">IVA</label>
                                    <select class="form-control form-control-sm" name="iva" id="iva">
                                        <option value="{{old('iva','0.21')}}" {{$empresa->iva=='0.21' ? 'selected' : '' }}>21%</option>
                                        <option value="{{old('iva','0.10')}}"  {{$empresa->iva=='0.10' ? 'selected' : ''}}>10%</option>
                                        <option value="{{old('iva','0.04')}}"  {{$empresa->iva=='0.04' ? 'selected' : ''}}>4%</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col">
                                    <label for="tfno">Teléfono</label>
                                    <input class="form-control form-control-sm" type="text" name="tfno" id="tfno" value="{{ old('tfno', $empresa->tfno) }}">
                                </div>
                                <div class="form-group col">
                                    <label for="emailgral">@ General</label>
                                    <input class="form-control form-control-sm" type="text" name="emailgral" id="emailgral" value="{{ old('emailgral', $empresa->emailgral) }}">
                                </div>
                                <div class="form-group col">
                                    <label for="emailadm">@ Administración</label>
                                    <input class="form-control form-control-sm" type="text" name="emailadm" id="emailadm" value="{{ old('emailadm', $empresa->emailadm) }}">
                                </div>
                                <div class="form-group col">
                                    <label for="web">Web</label>
                                    <input class="form-control form-control-sm" type="text" name="web" id="web" value="{{ old('web', $empresa->web) }}">
                                </div>
                                <div class="form-group col">
                                    <label for="observaciones">Observaciones</label>
                                    <input class="form-control form-control-sm" type="text" name="observaciones" id="observaciones" value="{{ old('observaciones', $empresa->observaciones) }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col">
                                    <label for="condicionpago_id">Condiciones pago</label>
                                    <select class="form-control form-control-sm" name="condicionpago_id" id="condicionpago_id">
                                        @foreach($condpagos as $condpagos)
                                            <option value="{{old('condicionpago_id',$condpagos->id)}}"  {{ $condpagos->condicionpago == $empresa->condicionpago->condicionpago ? 'selected' : '' }}>{{ $condpagos->condicionpago }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-1">
                                    <label for="periodofacturacion_id">P. Facturación</label>
                                    <select class="form-control form-control-sm" name="periodofacturacion_id" id="periodofacturacion_id">
                                        @foreach($periodos as $periodo)
                                            <option value="{{old('periodofacturacion_id',$periodo->id)}}"  {{ $periodo->periodofacturacion == $empresa->periodofacturacion->periodofacturacion ? 'selected' : '' }}>{{ $periodo->periodofacturacion }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-1">
                                    <label for="diafactura">Dia Factura</label>
                                    <input class="form-control form-control-sm" type="text" name="diafactura" id="diafactura" value="{{ old('diafactura', $empresa->diafactura) }}">
                                </div>
                                <div class="form-group col-1">
                                    <label for="diavencimiento">Dia Vencimiento</label>
                                    <input class="form-control form-control-sm" type="text" name="diavencimiento" id="diavencimiento" value="{{ old('diavencimiento', $empresa->diavencimiento) }}">
                                </div>
                                <div class="form-group col-1">
                                    <label for="referenciacliente">Referencia Cliente</label>
                                    <input class="form-control form-control-sm" type="text" name="referenciacliente" id="referenciacliente" value="{{ old('referenciacliente', $empresa->referenciacliente) }}">
                                </div>
                                <div class="form-group col-2">
                                    <label for="conceptofacturacionprincipal">Concepto Fact.Ppal</label>
                                    <input class="form-control form-control-sm" type="text" name="conceptofacturacionprincipal" id="conceptofacturacionprincipal" value="{{ old('conceptofacturacionprincipal', $empresa->conceptofacturacionprincipal) }}">
                                </div>
                                <div class="form-group col-1">
                                    <label for="importefacturacionprincipal">€ Ppal</label>
                                    <input class="form-control form-control-sm" type="text" name="importefacturacionprincipal" id="importefacturacionprincipal" value="{{ old('importefacturacionprincipal', $empresa->importefacturacionprincipal) }}">
                                </div>
                                <div class="form-group col-2">
                                    <label for="conceptofacturacionsecundario">Concepto Fact.Secundario</label>
                                    <input class="form-control form-control-sm" type="text" name="conceptofacturacionsecundario" id="conceptofacturacionsecundario" value="{{ old('conceptofacturacionsecundario', $empresa->conceptofacturacionsecundario) }}">
                                </div>
                                <div class="form-group col-1">
                                    <label for="importefacturacionsecundario">€ Secundario</label>
                                    <input class="form-control form-control-sm" type="text" name="importefacturacionsecundario" id="importefacturacionsecundario" value="{{ old('importefacturacionsecundario', $empresa->importefacturacionsecundario) }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col">
                                    <label for="porcentajemarta">% Marta</label>
                                    <input class="form-control form-control-sm" type="text" name="porcentajemarta" id="porcentajemarta" value="{{ old('porcentajemarta', $empresa->porcentajemarta) }}">
                                </div>
                                <div class="form-group col">
                                    <label for="porcentajesusana">% Susana</label>
                                    <input class="form-control form-control-sm" type="text" name="porcentajesusana" id="porcentajesusana" value="{{ old('porcentajesusana', $empresa->porcentajesusana) }}">
                                </div>
                                <div class="form-group col">
                                    <label for="banco">Banco</label>
                                    <input class="form-control form-control-sm" type="text" name="banco" id="banco" value="{{ old('banco', $empresa->banco) }}">
                                </div>
                                <div class="form-group col">
                                    <label for="iban">Iban</label>
                                    <input class="form-control form-control-sm" type="text" name="iban" id="iban" value="{{ old('iban', $empresa->iban) }}">
                                </div>
                                <div class="form-group col">
                                    <label for="observaciones">Observaciones</label>
                                    <input class="form-control form-control-sm" type="text" name="observaciones" id="observaciones" value="{{ old('observaciones', $empresa->observaciones) }}">
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

