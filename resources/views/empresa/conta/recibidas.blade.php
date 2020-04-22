@extends('layouts.programin')

@section('title','Programin-Go')
@section('titlePag','Conta-Recibidas')
@section('navbar')
@include('layouts.partials.navbarizquierda')
    <p class="h3 pt-2 text-dark">@yield('titlePag') {{$empresa->empresa}} <span class="small text-secondary font-weight-light"><sub>{{$empresa->nif}}</sub></span></p>
@include('empresa.conta.navbar')

@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        {{-- content header --}}
        <div class="content-header">
        </div>
        {{-- main content  --}}
        <section class="content">
            <div class="container-fluid"> 
                {{-- Recibidas --}}
                <div class="card">
                    <div class="card-header" data-card-widget="collapse" style="cursor: pointer">
                        <div class="row">
                            <h3 class="card-title col">Facturas Recibidas</h3>
                            <h6 class="col text-right"><span class="text-primary">Base Soportado: </span><br>{{$recibidas->sum('base21')+$recibidas->sum('base10')+$recibidas->sum('base4')+$recibidas->sum('baserecargo')}}</h6>
                            <h6 class="col text-right"><span class="text-primary">IVA Soportado: </span><br>{{$recibidas->sum('iva21')+$recibidas->sum('iva10')+$recibidas->sum('iva4')+$recibidas->sum('recargo')}}</h6>
                            <h6 class="col text-right"><span class="text-primary">Base Retención: </span><br>{{$recibidas->sum('baseretencion')}}</h6>
                            <h6 class="col text-right"><span class="text-primary">Total Retención: </span><br>{{$recibidas->sum('retencion')}}</h6>
                            <h6 class="col text-right"><span class="text-primary">Total Exento: </span><br>{{$recibidas->sum('exento')}}</h6>
                            <div class="card-tools text-right col">
                                <button type="button" class="btn btn-tool"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive p-0" style="height: 350px">
                            <table id="tablaasientos" class="table table-hover table-sm small table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>F.Asiento</th>
                                        <th>F.Fact.</th>
                                        <th>NºFact.</th>
                                        <th>Proveedor</th>
                                        <th>Concepto</th>
                                        <th class="text-right">Base 21</th>
                                        <th class="text-right">21%</th>
                                        <th class="text-right">Base 10</th>
                                        <th class="text-right">10%</th>
                                        <th class="text-right">Base 4</th>
                                        <th class="text-right">4%</th>
                                        <th class="text-right">Exento</th>
                                        <th class="text-right">Base Ret</th>
                                        <th class="text-right">% Ret</th>
                                        <th class="text-right">Retención</th>
                                        <th class="text-right">Total</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($recibidas as $recibida)
                                    <tr id="tr{{$recibida->id}}">
                                        <td>{{$recibida->id}}</td>
                                        <td>{{$recibida->fechaasiento}}</td>
                                        <td>{{$recibida->fechafactura}}</td>
                                        <td>{{$recibida->factura}}</td>
                                        <td>{{$recibida->provclis->nombre??$emitida->provcli_id}}</td>
                                        <td>{{$recibida->concepto}}</td>
                                        <td class="text-right">{{$recibida->base21}}</td>
                                        <td class="text-right">{{$recibida->iva21}}</td>
                                        <td class="text-right">{{$recibida->base10}}</td>
                                        <td class="text-right">{{$recibida->iva10}}</td>
                                        <td class="text-right">{{$recibida->base4}}</td>
                                        <td class="text-right">{{$recibida->iva4}}</td>
                                        <td class="text-right">{{$recibida->exento}}</td>
                                        <td class="text-right">{{$recibida->baseretencion}}</td>
                                        <td class="text-right">{{$recibida->porcentajeretencion}}</td>
                                        <td class="text-right">{{$recibida->retencion}}</td>
                                        <td class="text-right">{{$recibida->base21+$recibida->iva21+$recibida->base10+$recibida->iva10+$recibida->base4+$recibida->iva4
                                        +$recibida->exento-$recibida->retencion}}</td>
                                        <td  class="text-right m-0 pr-3">
                                            <form  id="formDelete{{$recibida->id}}">
                                                @method('POST')
                                                @csrf
                                                <a href="#!" class="btn-delete " title="Eliminar" onclick="eliminarfila('{{$recibida->id}}')"><i class="far fa-trash-alt text-danger fa-lg ml-1"></i></a>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th class="text-right">{{$recibidas->sum('base21')}}</th>
                                        <th class="text-right">{{$recibidas->sum('iva21')}}</th>
                                        <th class="text-right">{{$recibidas->sum('base10')}}</th>
                                        <th class="text-right">{{$recibidas->sum('iva10')}}</th>
                                        <th class="text-right">{{$recibidas->sum('base4')}}</th>
                                        <th class="text-right">{{$recibidas->sum('iva4')}}</th>
                                        <th class="text-right">{{$recibidas->sum('exento')}}</th>
                                        <th class="text-right">{{$recibidas->sum('baseretencion')}}</th>
                                        <th class="text-right">{{$recibidas->sum('porcentajeretencion')}}</th>
                                        <th class="text-right">{{$recibidas->sum('retencion')}}</th>
                                        <th class="text-right">{{$recibidas->sum('base21')+$recibidas->sum('iva21')+$recibidas->sum('base10')+$recibidas->sum('iva10')+$recibidas->sum('base4')+$recibidas->sum('iva4')+$recibidas->sum('exento')-$recibidas->sum('retencion')}}</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <table class="table table-hover table-sm small table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                    <th>F.Asiento</th>
                                    <th>F.Fact.</th>
                                    <th>NºFact.</th>
                                    <th>Proveedor</th>
                                    <th>Concepto</th>
                                    <th>Base 21</th>
                                    <th>21%</th>
                                    <th>Base 10</th>
                                    <th>10%</th>
                                    <th>Base 4</th>
                                    <th>4%</th>
                                    <th>Exento</th>
                                    <th>Base Ret</th>
                                    <th>% Ret</th>
                                    <th>Retención</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- <form id="creaForm"> --}}
                                <form id="creaForm" method="POST" action="{{route('conta.store')}}">
                                @csrf
                                    <tr>
                                        <input type="hidden" name="tipo" id="tipo" value="R"></td>
                                        <input type="hidden" name="empresa_id" id="empresa_id" value="{{$empresa->id}}"></td>
                                        <td><input class="form-control form-control-sm" type="date" name="fechaasiento" id="fechaasiento" value="{{ old('fechaasiento', '') }}"></td>
                                        <td><input class="form-control form-control-sm" type="date" name="fechafactura" id="fechafactura" value="{{ old('fechafactura', '') }}"></td>
                                        <td><input class="form-control form-control-sm" type="text" name="factura" id="factura" value="{{ old('factura', '') }}"></td>
                                        <td>
                                            <select class="form-control form-control-sm"  name="provcli_id" id="provcli_id">
                                                <option value="">-</option>
                                                @foreach($provclis as $provcli)
                                                <option value="{{ $provcli->id }}">{{ $provcli->nombre }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td><input class="form-control form-control-sm text-left" type="text" name="concepto" id="concepto" value="{{ old('concepto', '') }}"></td>
                                        <td><input class="form-control form-control-sm text-right" type="number" step="0.01" name="base21" id="base21" value="{{ old('base21', '0') }}"></td>
                                        <td><input class="form-control form-control-sm text-right" type="number" step="0.01" name="iva21" id="iva21" value="{{ old('iva21', '0') }}"></td>
                                        <td><input class="form-control form-control-sm text-right" type="number" step="0.01" name="base10" id="base10" value="{{ old('base10', '0') }}"></td>
                                        <td><input class="form-control form-control-sm text-right" type="number" step="0.01" name="iva10" id="iva10" value="{{ old('iva10', '0') }}"></td>
                                        <td><input class="form-control form-control-sm text-right" type="number" step="0.01" name="base4" id="base4" value="{{ old('base4', '0') }}"></td>
                                        <td><input class="form-control form-control-sm text-right" type="number" step="0.01" name="iva4" id="iva4" value="{{ old('iva4', '0') }}"></td>
                                        <td><input class="form-control form-control-sm text-right" type="number" step="0.01" name="exento" id="exento" value="{{ old('exento', '0') }}"></td>
                                        <td><input class="form-control form-control-sm text-right" type="number" step="0.01" name="baseretencion" id="baseretencion" value="{{ old('baseretencion', '0') }}"></td>
                                        <td><input class="form-control form-control-sm text-right" type="number" step="0.01" name="porcentajeretencion" id="porcentajeretencion" value="{{ old('porcentajeretencion', '0') }}"></td>
                                        <td><input class="form-control form-control-sm text-right" type="number" step="0.01" name="retencion" id="retencion" value="{{ old('retencion', '0') }}"></td>
                                        <td><a href="#" title="Nuevo" onclick="addline('creaForm','{{ route('conta.store') }}')"><i class="fas fa-plus-circle fa-2x text-primary"></i></a></td>
                                        <td><button type="submit">b</button></td>
                                    </tr>
                                </form>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scriptchosen')
    <script>
    </script>
@endpush

