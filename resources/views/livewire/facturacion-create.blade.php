<form method="POST" wire:submit.prevent="save">
    @csrf
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-1">
                    <div class="text-sm font-weight-bold">Factura</div>
                    <div class="text-sm font-weight-bold">
                        <input wire:model="facturacion.factura" id="factura" type="text" class="form-control form-control-sm @error('facturacion.factura') is-invalid @enderror" autofocus>
                        @error('facturacion.factura') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                    </div>
                </div>
                <div class="col-3">
                    <div class="text-sm font-weight-bold">Empresa</div>
                    <div class="text-sm font-weight-bold">
                        <select wire:model="facturacion.empresa_id" class="form-control form-control-sm @error('facturacion.empresa_id') is-invalid @enderror">
                            <option value="">-- choose category --</option>
                            @foreach ($empresas as $empresa)
                                <option value="{{ $empresa->id }}">{{ $empresa->empresa }}</option>
                            @endforeach
                        </select>
                        @error('facturacion.empresa_id') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                    </div>
                </div>
                <div class="col-1">
                    <div class="text-sm font-weight-bold">F.Factura</div>
                    <div class="text-sm font-weight-bold">
                        <input wire:model="facturacion.fechafactura" id="fechafactura" type="date" class="form-control form-control-sm unstyled @error('facturacion.fechafactura') is-invalid @enderror">
                        @error('facturacion.fechafactura') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                    </div>
                </div>
                <div class="col-1">
                    <div class="text-sm font-weight-bold">F.Vt.</div>
                    <div class="text-sm font-weight-bold">
                        <input wire:model="facturacion.fechavto" id="fechavto" type="date" class="form-control form-control-sm unstyled @error('facturacion.fechavto') is-invalid @enderror">
                        @error('facturacion.fechavto') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                    </div>
                </div>
                <div class="col-1">
                    <div class="text-sm font-weight-bold">C.Pago</div>
                    <div class="text-sm font-weight-bold">
                        <select wire:model="facturacion.condpago_id" class="form-control form-control-sm @error('facturacion.condpago_id') is-invalid @enderror">
                            <option value="">-- choose category --</option>
                            @foreach ($condiciones as $condicion)
                                <option value="{{ $condicion->id }}">{{ $condicion->condpagocorto }}</option>
                            @endforeach
                        </select>
                        @error('facturacion.condpago_id') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                    </div>
                </div>
                <div class="col-1">
                    <div class="text-sm font-weight-bold">Cuenta</div>
                    <div class="text-sm font-weight-bold">
                        <input wire:model="facturacion.subcuenta" id="subcuenta" type="text" class="form-control form-control-sm @error('facturacion.subcuenta') is-invalid @enderror">
                        @error('facturacion.subcuenta') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                    </div>
                </div>
                <div class="col-1">
                    <div class="text-sm font-weight-bold">F.Conta</div>
                    <div class="text-sm font-weight-bold">
                        <input wire:model="facturacion.fechacontabilizado" id="fechacontabilizado" type="date" class="form-control form-control-sm unstyled @error('facturacion.fechacontabilizado') is-invalid @enderror">
                        @error('facturacion.fechacontabilizado') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                    </div>
                </div>
                <div class="col-1">
                    <div class="text-sm font-weight-bold">Ref.</div>
                    <div class="text-sm font-weight-bold">
                        <input wire:model="facturacion.refcliente" id="refcliente" type="text" class="form-control form-control-sm @error('facturacion.refcliente') is-invalid @enderror">
                        @error('facturacion.refcliente') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                    </div>
                </div>
                <div class="col-1">
                    <div class="text-sm font-weight-bold">Email</div>
                    <div class="text-sm font-weight-bold">
                        <input wire:model="facturacion.emailconta" id="emailconta" type="text" class="form-control form-control-sm @error('facturacion.emailconta') is-invalid @enderror">
                        @error('facturacion.emailconta') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                    </div>
                </div>
                <div class="col-1">
                    <div class="text-sm font-weight-bold">&nbsp;</div>
                    <div class="text-sm font-weight-bold">
                    <button type="submit" class="btn btn-primary btn-sm ">Save</button>
                    </div>
                </div>
            </div>
            <div class="row text-sm font-weight-bold mt-2">
                <div class="col-auto">
                    <input wire:model="facturacion.enviarmail" type="checkbox" value="1" /> Enviar mail
                    @error('facturacion.enviarmail')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                </div>
                <div class="col-auto">
                    <input wire:model="facturacion.mailenviado" type="checkbox" value="1" /> Mail Enviado
                    @error('facturacion.mailenviado')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                </div>
                <div class="col-auto">
                    <input wire:model="facturacion.contabilizado" type="checkbox" value="1" /> Contabilizado
                    @error('facturacion.contabilizado')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                </div>
                <div class="col-auto">
                        <input wire:model="facturacion.pagada" type="checkbox" value="1" /> Pagada
                        @error('facturacion.pagada')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                </div>
            </div>
        </div>
        <div class="card-body">

        </div>
    </div>
        </div>
    </div>

</form>
