@extends('layouts.programin')

@section('title','Programin-Go')
@section('titlePag','Recibidas')
@section('navbar')
@include('layouts.partials.navbarizquierda')
    <p class="h3 pt-2 text-dark">@yield('titlePag') {{$empresa->empresa}}</p>
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
                {{-- @include('layouts.partials.mensajes') --}}
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <h3 class="card-title col">Facturas Recibidas</h3>
                            <h6 class="col text-right"><span class="text-primary">Base Soportado: </span>:<br>{{$recibidas->sum('base21')+$recibidas->sum('base10')+$recibidas->sum('base4')+$recibidas->sum('baserecargo')}}</h6><br>
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
                        <div id="tablaconta" class="table-responsive p-0">
                            <table id="tablaasientos" class="table table-hover table-sm small table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>F.Asiento</th>
                                        <th>F.Fact.</th>
                                        <th>Proveedor</th>
                                        <th>NºFact.</th>
                                        <th>Concepto</th>
                                        <th class="text-right">Base 21<br>{{$recibidas->sum('base21')}}</th>
                                        <th class="text-right">21%<br>{{$recibidas->sum('iva21')}}</th>
                                        <th class="text-right">Base 10<br>{{$recibidas->sum('base10')}}</th>
                                        <th class="text-right">10%<br>{{$recibidas->sum('iva10')}}</th>
                                        <th class="text-right">Base 4<br>{{$recibidas->sum('base4')}}</th>
                                        <th class="text-right">4%<br>{{$recibidas->sum('iva4')}}</th>
                                        <th class="text-right">Exento<br>{{$recibidas->sum('exento')}}</th>
                                        <th class="text-right">Base Ret<br>{{$recibidas->sum('baseretencion')}}</th>
                                        <th class="text-right">% Ret</th>
                                        <th class="text-right">Retención<br>{{$recibidas->sum('retencion')}}</th>
                                        <th class="text-right">Total<br>{{$recibidas->sum('base21')+$recibidas->sum('iva21')+$recibidas->sum('base10')+$recibidas->sum('iva10')+$recibidas->sum('base4')+$recibidas->sum('iva4')+$recibidas->sum('exento')-+$recibidas->sum('retencion')}}</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="bodyasientos">
                                    @foreach($recibidas as $recibida)
                                    <tr id="tr{{$recibida->id}}">
                                        <td>{{$recibida->id}}</td>
                                        <td>{{$recibida->fechaasiento}}</td>
                                        <td>{{$recibida->fechafactura}}</td>
                                        <td>{{$recibida->provclis->nombre??$recibida->provcli_id}}</td>
                                        <td>{{$recibida->factura}}</td>
                                        <td>{{$recibida->concepto}}</td>
                                        <td class="text-right">{{number_format($recibida->base21,2)}}</td>
                                        <td class="text-right">{{number_format($recibida->iva21,2)}}</td>
                                        <td class="text-right">{{number_format($recibida->base10,2)}}</td>
                                        <td class="text-right">{{number_format($recibida->iva10,2)}}</td>
                                        <td class="text-right">{{number_format($recibida->base4,2)}}</td>
                                        <td class="text-right">{{number_format($recibida->iva4,2)}}</td>
                                        <td class="text-right">{{number_format($recibida->exento,2)}}</td>
                                        <td class="text-right">{{number_format($recibida->baseretencion,2)}}</td>
                                        <td class="text-right">{{number_format($recibida->porcentajeretencion,2)}}</td>
                                        <td class="text-right">{{number_format($recibida->retencion,2)}}</td>
                                        <td class="text-right">{{number_format($recibida->base21+$recibida->iva21+$recibida->base10+$recibida->iva10+$recibida->base4+$recibida->iva4
                                        +$recibida->exento-$recibida->retencion,2)}}</td>
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
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <table class="table table-hover table-sm small table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                    <th width="4%">F.Asiento</th>
                                    <th width="4%">F.Fact.</th>
                                    <th width="20%">Proveedor</th>
                                    <th width="5%">NºFact.</th>
                                    <th>Concepto</th>
                                    <th width="5%">Base 21</th>
                                    <th width="4%">21%</th>
                                    <th width="5%">Base 10</th>
                                    <th width="4%">10%</th>
                                    <th width="5%">Base 4</th>
                                    <th width="4%">4%</th>
                                    <th width="5%">Exento</th>
                                    <th width="5%">Base Ret</th>
                                    <th width="4%">% Ret</th>
                                    <th width="5%">Retención</th>
                                    <th width="5%">Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- <form id="creaForm"> --}}
                                <form id="creaForm" method="POST" action="{{route('conta.store')}}">
                                {{-- <form id="creaForm" method="POST" action="{{route('conta.controlfactura')}}"> --}}
                                @csrf
                                    <tr>
                                        <input type="hidden" name="tipo" id="tipo" value="R"></td>
                                        <input type="hidden" name="empresa_id" id="empresa_id" value="{{$empresa->id}}"></td>
                                        <td class="px-0"><input tabindex="1" class="focusNext form-control form-control-sm unstyled pr-0 m-0" type="date" name="fechaasiento" id="fechaasiento" min={{"2020-01-01"}} max="2020-12-31" value="{{ old('fechaasiento', '2020-01-01') }}"></td>
                                        <td class="px-0"><input tabindex="2" class="focusNext form-control form-control-sm  unstyled pr-0 m-0" type="date" name="fechafactura" id="fechafactura" value="{{ old('fechafactura', '') }}"></td>
                                        <td>
                                            <select tabindex="3" class="focusNext form-control form-control-sm"  name="provcli_id" id="provcli_id" style="width: 100%;">
                                                <option value="">-</option>
                                                @foreach($provclis as $provcli)
                                                <option value="{{ $provcli->id }}">{{ $provcli->nombre }} - {{ $provcli->id }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td class="px-0"><input tabindex="4" class="focusNext form-control form-control-sm" type="text" name="factura" id="factura" onchange="controlfactura('creaForm','{{ route('conta.controlfactura') }}')" value="{{ old('factura', '') }}"></td>
                                        <td class="px-0"><input class="form-control form-control-sm text-left" type="text" name="concepto" id="concepto" value="{{ old('concepto', '') }}"></td>
                                        <td class="px-0"><input tabindex="5" class="focusNext form-control form-control-sm text-right unstyled" type="text"  name="base21" id="base21" value="{{ old('base21', '') }}"></td>
                                        <td class="px-0"><input class="form-control form-control-sm text-right unstyled" type="number" step="0.01" name="iva21" id="iva21" value="{{ old('iva21', '') }}"></td>
                                        <td class="px-0"><input tabindex="6" class="focusNext form-control form-control-sm text-right unstyled" type="number" step="0.01" name="base10" id="base10" value="{{ old('base10', '') }}"></td>
                                        <td class="px-0"><input class="form-control form-control-sm text-right unstyled" type="number" step="0.01" name="iva10" id="iva10" value="{{ old('iva10', '') }}"></td>
                                        <td class="px-0"><input tabindex="7" class="focusNext form-control form-control-sm text-right unstyled" type="number" step="0.01" name="base4" id="base4" value="{{ old('base4', '') }}"></td>
                                        <td class="px-0"><input class="form-control form-control-sm text-right unstyled" type="number" step="0.01" name="iva4" id="iva4" value="{{ old('iva4', '0') }}"></td>
                                        <td class="px-0"><input tabindex="8" class="focusNext form-control form-control-sm text-right unstyled" type="number" step="0.01" name="exento" id="exento" value="{{ old('exento', '') }}"></td>
                                        <td class="px-0"><input tabindex="9" class="focusNext form-control form-control-sm text-right unstyled" type="number" step="0.01" name="baseretencion" id="baseretencion" value="{{ old('baseretencion', '0') }}"></td>
                                        <td class="px-0">
                                            <select tabindex="10" class="focusNext form-control form-control-sm text-right" name="porcentajeretencion" id="porcentajeretencion">
                                                <option value="0" selected>0</option>
                                                <option value="0.07">7</option>
                                                <option value="0.15">14</option>
                                                <option value="0.19">19</option>
                                            </select>
                                        </td>
                                        <td class="px-0"><input tabindex="11" class="focusNext form-control form-control-sm text-right unstyled" type="number" step="0.01" name="retencion" id="retencion" value="{{ old('retencion', '0') }}"></td>
                                        <td class="px-0"><input class="form-control form-control-sm text-right unstyled text-primary" type="number" step="0.01" id="totalnuevo" value="" readonly></td>
                                        <td class="px-0"><a tabindex="12" id="btn_add" class="focusNext" href="#" title="Nuevo" onclick="addline()"><i class="fas fa-plus-circle fa-2x text-primary"></i></a></td>
                                        {{-- <td class="px-0"><input type="submit" value="a"></td> --}}
                                    </tr>
                                </form>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Modal control factura-->
    <div class="modal fade" id="controlfactura" tabindex="-1" role="dialog" aria-labelledby="controlfactura" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="controlfactura">Factura existente</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                Esta factura ya existe para este proveedor.<br>
                ¿Deseas mantenerla?
            </div>
            <div class="modal-footer">
            <button type="button" id="ctrlFacturaYes"class="btn btn-primary" data-dismiss="modal">Sí</button>
            <button type="button" id="ctrlFacturaNo"class="btn btn-danger" data-dismiss="modal">No</button>
            </div>
        </div>
        </div>
    </div>
@endsection

@push('scriptchosen')
    <script>
        $(document).ready(function(){

            if(screen.height>1000) 
                $("#tablaconta").height(570);
            else 
                $("#tablaconta").height(350);

            $("#fechaasiento").focus();


            $("#provcli_id").select2({
                allowClear:true
            });

            $("#ctrlFacturaYes").click(function(){
                $("#concepto").focus();
            })            
            $("#ctrlFacturaNo").click(function(){
                $("#factura").val('');
                $("#factura").focus();
            })            
            $("#fechaasiento").change(function(){
                $('#fechafactura').val($("#fechaasiento").val());
            });
            $("#base21").change(function(){
                v=$("#base21").val()*0.21;
                (Math.round( v * 100 )/100 ).toString();
                $('#iva21').val(v.toFixed(2));
                $('#baseretencion').val($("#base21").val());
                total();
            });
            $("#base10").change(function(){
                v=$("#base10").val()*0.10;
                (Math.round( v * 100 )/100 ).toString();
                $('#iva10').val(v.toFixed(2));
                total();
            });
            $("#base4").change(function(){
                v=$("#base4").val()*0.04;
                (Math.round( v * 100 )/100 ).toString();
                $('#iva4').val(v.toFixed(2));
                total();
            });
            $("#exento").change(function(){
                total();
            });
            $("#baseretencion").change(function(){
                v=$("#baseretencion").val()*$("#porcentajeretencion").val();
                (Math.round( v * 100 )/100 ).toString();
                $('#retencion').val(v.toFixed(2));
                total();
            });

            $("#porcentajeretencion").change(function(){
                v=$("#baseretencion").val()*$("#porcentajeretencion").val();
                (Math.round( v * 100 )/100 ).toString();
                $('#retencion').val(v.toFixed(2));
                total();
            });
        });

        function total(){
            var base21=$("#base21").val();
            var iva21=$("#iva21").val();
            var base10=$("#base10").val();
            var iva10=$("#iva10").val();
            var base4=$("#base4").val();
            var iva4=$("#iva4").val();
            var exento=$("#exento").val();
            var retencion=$("#retencion").val();
            var total;
            base21= base21=='' ? 0 : parseFloat(base21);
            iva21= iva21=='' ? 0 : parseFloat(iva21);
            base10= base10=='' ? 0 : parseFloat(base10);
            iva10= iva10=='' ? 0 : parseFloat(iva10);
            base4= base4=='' ? 0 : parseFloat(base4);
            iva4= iva4=='' ? 0 : parseFloat(iva4);
            exento= exento =='' ? 0 : parseFloat(exento);
            retencion=retencion=='' ? 0 : parseFloat(retencion);
            total=base21+iva21+base10+iva10+base4+iva4+exento-retencion;
            (Math.round( total * 100 )/100 ).toString();
            $('#totalnuevo').val(total.toFixed(2));
        }
    </script>
@endpush

