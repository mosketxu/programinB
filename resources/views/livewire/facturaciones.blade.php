<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <form>
                    <div class="form-row align-items-center">
                        <div class="col-sm-3">
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <div class="input-group-text input-group-text-sm">Empresa</div>
                                </div>
                                <input wire:model="filtroEmpresa" type="text" class="form-control form-control-sm"  placeholder="Empresa">
                            </div>
                        </div>
                        <div class="col-sm-1">
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <div class="input-group-text input-group-text-sm">Año</div>
                                </div>
                                <input wire:model="filtroAnyo" type="text" class="form-control form-control-sm"  placeholder="Empresa">
                            </div>
                        </div>
                        <div class="col-sm-1">
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <div class="input-group-text input-group-text-sm">Mes</div>
                                </div>
                                <input wire:model="filtroMes" type="text" class="form-control form-control-sm"  placeholder="Mes">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <div class="input-group-text input-group-text-sm">NºFactura</div>
                                </div>
                                <input wire:model="filtroFactura" type="text" class="form-control form-control-sm"  placeholder="NºFactura">
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="form-check">
                                <input wire:model="filtroConta" class="form-check-input" type="checkbox">
                                <label class="form-check-label">
                                    Contabilizado
                                </label>
                            </div>
                            <div class="form-check">
                                <input wire:model="filtroEnviado" class="form-check-input" type="checkbox">
                                <label class="form-check-label">
                                    Enviado
                                </label>
                            </div>
                            <div class="form-check">
                                <input wire:model="filtroPagado" class="form-check-input" type="checkbox">
                                <label class="form-check-label">
                                    Pagado
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        {{ $facturaciones->links() }}
                    </div>
                </form>
            </div>
            <div class="card-body">
                {{-- <div wire:loading class="alert alert-success col-md-12" >
                    Loading data...
                </div> --}}
                <div class="table-responsive p-0 alturatabla2">
                    <table class="table table-hover table-sm small table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Empresa</th>
                                <th>Nº Factura</th>
                                <th>F.Factura</th>
                                <th>F.Vto</th>
                                <th class="text-right pr-4">Total €</th>
                                <th>Cond.Pago</th>
                                <th>Email</th>
                                <th>Refcliente</th>
                                <th>Enviado</th>
                                <th>Conta</th>
                                <th>F.Conta</th>
                                <th>Pagado</th>
                                <th></th>
                            </tr>
                       </thead>
                       <tbody>
                        @forelse($facturaciones as $facturacion)
                            <tr>
                                <td><a href="#" wire:click="$toggle('muestraDetalle')"><i class="fas fa-plus fa text-primary text-white mr-2"></i>{{$facturacion->id}}</a></td>
                                <td>{{$facturacion->empresa->empresa}}</td>
                                <td>{{$facturacion->factura}}</td>
                                <td>{{$facturacion->fechafactura}}</td>
                                <td>{{$facturacion->fechavto}}</td>
                                <td class="text-right pr-4">{{$facturacion->getTotal()}}</td>
                                <td>{{$facturacion->condpago->condpagocorto}}</td>
                                <td>{{$facturacion->emailconta}}</td>
                                <td>{{$facturacion->refcliente}}</td>
                                <td>@if($facturacion->mailenviado===1) <i class='fas fa-check text-success'></i> @else <i class='fas fa-times text-red'></i>@endif</td>
                                <td>@if($facturacion->contabilizado===1) <i class='fas fa-check text-success'></i> @else <i class='fas fa-times text-red'></i>@endif</td>
                                <td>{{$facturacion->fechacontabilizado}}</td>
                                <td>@if($facturacion->pagada===1) <i class='fas fa-check text-success'></i> @else <i class='fas fa-times text-red'></i>@endif</td>
                                <td>
                                    <a href="{{ route('facturacion.edit', $facturacion) }}" title="Editar"><i class="far fa-edit text-primary fa-lg ml-2"></i></a>
                                    {{-- <a wire:click="deleteProduct('{{$product->id}}')" class="btn btn-sm btn-danger" href="#">Delete</a> --}}
                                    <a href="#" onclick="return confirm('¿Estás seguro?') || event.stopImmediatePropagation()"
                                        {{-- wire:click="deleteProduct('{{ $product->id }}')" --}}
                                        class="btn-delete " title="Eliminar" ><i class="far fa-trash-alt text-danger fa-lg ml-1"></i>
                                    </a>
                                </td>
                            </tr>
                            @if($muestraDetalle)
                                @forelse ($facturacion->facturaciondetalles as $detalle)
                                <tr class="border-0">
                                    <td colspan="14" class="border-0 my-0 py-0">
                                        <div class="card mb-0">
                                            @if ($loop->first)
                                            <div class="card-header py-1">
                                                <div class="row font-weight-bold">
                                                    <div class="col-3">Concepto</div>
                                                    <div class="col-1">Uds.</div>
                                                    <div class="col-1">Coste</div>
                                                    <div class="col-1">% Iva</div>
                                                    <div class="col-1">Iva</div>
                                                    <div class="col-1">Subtotal</div>
                                                    <div class="col-1">Subcuenta</div>
                                                    <div class="col-1">Suplido</div>
                                                    <div class="col-1">Pagado por</div>
                                                </div>
                                            </div>
                                            @endif
                                            <div class="card-body py-1">
                                                <div class="row">
                                                    <div class="col-3">{{$detalle->concepto}}</div>
                                                    <div class="col-1">{{$detalle->unidades}}</div>
                                                    <div class="col-1">{{$detalle->coste}}</div>
                                                    <div class="col-1">{{$detalle->iva}}</div>
                                                    <div class="col-1">{{$detalle->unidades * $detalle->coste * $detalle->iva}}</div>
                                                    <div class="col-1">{{$detalle->unidades * $detalle->coste *  (1+ $detalle->iva) }}</div>
                                                    <div class="col-1">{{$detalle->subcuenta}}</div>
                                                    <div class="col-1">{{$detalle->suplido}}</div>
                                                    <div class="col-1">{{$detalle->pagadopor==='0' ? 'Marta' : 'Susana'}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr colspan=14>
                                    <th colspan="14">
                                        No hay
                                    </th>
                                </tr>
                                @endforelse
                            @endif
                        @empty
                            <tr>
                                <td colspan="3">No hay facturaciones.</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
