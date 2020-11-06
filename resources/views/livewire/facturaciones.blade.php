<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-3">
                        <input wire:model="filtroEmpresa" type="text" placeholder="Filtro Empresa..." class="form-control" />
                    </div>
                    <div class="col-md-3">
                        <input wire:model="filtroAnyo" type="text" placeholder="Filtro Año..." class="form-control" />
                    </div>
                    <div class="col-md-3">
                        <input wire:model="filtroMes" type="text" placeholder="Filtro Mes..." class="form-control" />
                    </div>
                    {{-- <div class="col-md-3">
                        <select wire:model="searchCategory" name="category" class="form-control">
                            <option value="">-- choose category --</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div> --}}
                    <div class="col-md-6 text-right">
                        <a href="{{ route('facturacion.create') }}" class="btn btn-primary">Nueva Factura</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div wire:loading class="alert alert-success col-md-12" >
                    Loading data...
                </div>

                <div class="table-responsive p-0 alturatabla2">
                    <table class="table table-hover table-sm small table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nº Factura</th>
                                <th>F.Factura</th>
                                <th>F.Vto</th>
                                <th>F.Sage</th>
                                <th>Empresa</th>
                                <th>Cond.Pago</th>
                                <th>Enviada</th>
                                <th>Pagada</th>
                                <th>Refcliente</th>
                                <th>Email</th>
                                <th>Total €</th>
                                <th></th>
                            </tr>
                       </thead>
                       <tbody>
                        @forelse($facturaciones as $facturacion)
                            <tr>
                                <td>{{$facturacion->id}}</td>
                                <td>{{$facturacion->factura}}</td>
                                <td>{{$facturacion->fechafactura}}</td>
                                <td>{{$facturacion->fechavto}}</td>
                                <td>{{$facturacion->fechaexport}}</td>
                                <td>{{$facturacion->empresa->empresa}}</td>
                                <td>{{$facturacion->condpago->condpagocorto}}</td>
                                <td>{{$facturacion->mailenviado}}</td>
                                <td>{{$facturacion->pagada}}</td>
                                <td>{{$facturacion->refcliente}}</td>
                                <td>{{$facturacion->email}}</td>
                                <td>€</td>
                                <td>
                                    <a href="{{ route('facturacion.edit', $facturacion) }}" title="Editar"><i class="far fa-edit text-primary fa-lg ml-2"></i></a>
                                    {{-- <a wire:click="deleteProduct('{{$product->id}}')" class="btn btn-sm btn-danger" href="#">Delete</a> --}}
                                    <a href="#" onclick="return confirm('¿Estás seguro?') || event.stopImmediatePropagation()"
                                        {{-- wire:click="deleteProduct('{{ $product->id }}')" --}}
                                        class="btn-delete " title="Eliminar" ><i class="far fa-trash-alt text-danger fa-lg ml-1"></i>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3">No products found.</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                    {{ $facturaciones->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
