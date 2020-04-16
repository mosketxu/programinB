@extends('layouts.programin')

@section('title','Programin-Go')
@section('titlePag','Conta')
@section('navbar')
@include('layouts.partials.navbarizquierda')
    <p class="h3 pt-2 text-dark">@yield('titlePag') {{$empresa->empresa}}-{{$empresa->nif}}</p>
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
                {{-- Emitidas --}}
                <div class="card collapsed-card">
                    <div class="card-header" data-card-widget="collapse" style="cursor: pointer">
                        <h3 class="card-title pl-3">Facturas Emitidas</h3>
                        <div class="card-tools pr-3">
                            <button type="button" class="btn btn-tool"><i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive p-0">
                            <table class="table table-hover table-sm small text-nowrap">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>F.Asiento</th>
                                    <th>F.Fact.</th>
                                    <th>NºFact.</th>
                                    <th>Cliente</th>
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
                                    <th>R.eq</th>
                                    <th>% R.eq</th>
                                    <th>Recargo</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($emitidas as $emitida)
                                    <tr>
                                        <td>{{$emitida->id}}</td>
                                        <td>{{$emitida->fechaasiento}}</td>
                                        <td>{{$emitida->fechafactura}}</td>
                                        <td>{{$emitida->factura}}</td>
                                        <td>{{$emitida->provclis->nombre??$emitida->provcli_id}}</td>
                                        <td>{{$emitida->base21}}</td>
                                        <td>{{$emitida->iva21}}</td>
                                        <td>{{$emitida->base10}}</td>
                                        <td>{{$emitida->iva10}}</td>
                                        <td>{{$emitida->base4}}</td>
                                        <td>{{$emitida->iva4}}</td>
                                        <td>{{$emitida->exento}}</td>
                                        <td>{{$emitida->baseretencion}}</td>
                                        <td>{{$emitida->porcentajeretencion}}</td>
                                        <td>{{$emitida->retencion}}</td>
                                        <td>{{$emitida->baserecargo}}</td>
                                        <td>{{$emitida->porcentajerecargo}}</td>
                                        <td>{{$emitida->recargo}}</td>
                                        <td>{{$emitida->base21+$emitida->iva21+$emitida->base10+$emitida->iva10+$emitida->base4+$emitida->iva4
                                        +$emitida->exento-$emitida->retencion+$emitida->recargo}}</td>
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
                                        <th>{{$emitidas->sum('base21')}}</th>
                                        <th>{{$emitidas->sum('iva21')}}</th>
                                        <th>{{$emitidas->sum('base10')}}</th>
                                        <th>{{$emitidas->sum('iva10')}}</th>
                                        <th>{{$emitidas->sum('base4')}}</th>
                                        <th>{{$emitidas->sum('iva4')}}</th>
                                        <th>{{$emitidas->sum('exento')}}</th>
                                        <th>{{$emitidas->sum('baseretencion')}}</th>
                                        <th>{{$emitida->sum('porcentajeretencion')}}</th>
                                        <th>{{$emitida->sum('retencion')}}</th>
                                        <th>{{$emitida->sum('baserecargo')}}</th>
                                        <th>{{$emitida->sum('porcentajerecargo')}}</th>
                                        <th>{{$emitida->sum('recargo')}}</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                        <div class="col"><span class="text-primary">Base Repercutido+ R.eq: </span>{{$emitidas->sum('base21')+$emitidas->sum('base10')+$emitidas->sum('base4')+$emitidas->sum('baserecargo')}}</div>
                        <div class="col"><span class="text-primary">IVA Repercutido + R.eq: </span>{{$emitidas->sum('iva21')+$emitidas->sum('iva10')+$emitidas->sum('iva4')+$emitidas->sum('recargo')}}</div>
                        <div class="col"><span class="text-primary">Base Retención: </span>{{$emitidas->sum('baseretencion')}}</div>
                        <div class="col"><span class="text-primary">Total Retención: </span>{{$emitidas->sum('retencion')}}</div>
                        <div class="col"><span class="text-primary">Total Exento: </span>{{$emitidas->sum('exento')}}</div>
                        </div>
                    </div>
                </div>
                {{-- Recibidas --}}
                <div class="card collapsed-card">
                    <div class="card-header" data-card-widget="collapse" style="cursor: pointer">
                        <h3 class="card-title pl-3">Facturas Recibidas</h3>
                        <div class="card-tools pr-3">
                            <button type="button" class="btn btn-tool"><i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive p-0">
                            <table class="table table-hover table-sm small text-nowrap">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>F.Asiento</th>
                                    <th>F.Fact.</th>
                                    <th>NºFact.</th>
                                    <th>Cliente</th>
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
                                    @foreach($recibidas as $recibida)
                                    <tr>
                                        <td>{{$recibida->id}}</td>
                                        <td>{{$recibida->fechaasiento}}</td>
                                        <td>{{$recibida->fechafactura}}</td>
                                        <td>{{$recibida->factura}}</td>
                                        <td>{{$recibida->provclis->nombre??$emitida->provcli_id}}</td>
                                        <td>{{$recibida->base21}}</td>
                                        <td>{{$recibida->iva21}}</td>
                                        <td>{{$recibida->base10}}</td>
                                        <td>{{$recibida->iva10}}</td>
                                        <td>{{$recibida->base4}}</td>
                                        <td>{{$recibida->iva4}}</td>
                                        <td>{{$recibida->exento}}</td>
                                        <td>{{$recibida->baseretencion}}</td>
                                        <td>{{$recibida->porcentajeretencion}}</td>
                                        <td>{{$recibida->retencion}}</td>
                                        <td>{{$recibida->base21+$recibida->iva21+$recibida->base10+$recibida->iva10+$recibida->base4+$recibida->iva4
                                        +$recibida->exento-$recibida->retencion}}</td>
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
                                        <th>{{$recibidas->sum('base21')}}</th>
                                        <th>{{$recibidas->sum('iva21')}}</th>
                                        <th>{{$recibidas->sum('base10')}}</th>
                                        <th>{{$recibidas->sum('iva10')}}</th>
                                        <th>{{$recibidas->sum('base4')}}</th>
                                        <th>{{$recibidas->sum('iva4')}}</th>
                                        <th>{{$recibidas->sum('exento')}}</th>
                                        <th>{{$recibidas->sum('baseretencion')}}</th>
                                        <th>{{$recibidas->sum('porcentajeretencion')}}</th>
                                        <th>{{$recibidas->sum('retencion')}}</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                        <div class="col"><span class="text-primary">Base Soportado: </span>{{$emitidas->sum('base21')+$emitidas->sum('base10')+$emitidas->sum('base4')+$emitidas->sum('baserecargo')}}</div>
                        <div class="col"><span class="text-primary">IVA Soportado: </span>{{$emitidas->sum('iva21')+$emitidas->sum('iva10')+$emitidas->sum('iva4')+$emitidas->sum('recargo')}}</div>
                        <div class="col"><span class="text-primary">Base Retención: </span>{{$emitidas->sum('baseretencion')}}</div>
                        <div class="col"><span class="text-primary">Total Retención: </span>{{$emitidas->sum('retencion')}}</div>
                        <div class="col"><span class="text-primary">Total Exento: </span>{{$emitidas->sum('exento')}}</div>
                        </div>
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

