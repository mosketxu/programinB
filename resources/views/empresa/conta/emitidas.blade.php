@extends('layouts.programin')

@section('title','Programin-Go')
@section('titlePag','Conta-Emitidas')
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
                {{-- Emitidas --}}
                <div class="card collapsed-card">
                    <div class="card-header py-2" data-card-widget="collapse" style="cursor: pointer">
                        <div class="row">
                            <h3 class="card-title col">Facturas Emitidas</h3>
                            <h6 class="col text-right"><span class="text-primary">Base Repercutido+ R.eq: </span><br>{{$emitidas->sum('base21')+$emitidas->sum('base10')+$emitidas->sum('base4')+$emitidas->sum('baserecargo')}}</h6>
                            <h6 class="col text-right"><span class="text-primary">IVA Repercutido + R.eq: </span><br>{{$emitidas->sum('iva21')+$emitidas->sum('iva10')+$emitidas->sum('iva4')+$emitidas->sum('recargo')}}</h6>
                            <h6 class="col text-right"><span class="text-primary">Base Retención: </span><br>{{$emitidas->sum('baseretencion')}}</h6>
                            <h6 class="col text-right"><span class="text-primary">Total Retención: </span><br>{{$emitidas->sum('retencion')}}</h6>
                            <h6 class="col text-right"><span class="text-primary">Total Exento: </span><br>{{$emitidas->sum('exento')}}</h6>
                            <div class="card-tools text-right col">
                                <button type="button" class="btn btn-tool"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive p-0" style="height: 450px">
                            <table class="table table-hover table-sm small table-head-fixed text-nowrap">
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
                </div>
                {{-- Recibidas --}}
            </div>
        </section>
    </div>
@endsection

@push('scriptchosen')
    <script>
    </script>
@endpush

