<?php

namespace App\Http\Livewire;

use App\{Facturacion,Empresa, CondicionPago};
use Livewire\Component;


class FacturacionCreate extends Component
{

    public Facturacion $facturacion;
    public $empresas;
    public $condiciones;

    protected $rules = [
        'facturacion.factura' => 'max:9|min:8',
        'facturacion.fechafactura' => 'date',
        'facturacion.empresa_id' => 'integer',
        'facturacion.fechavto' => 'date',
        'facturacion.condpago_id' => 'integer',
        // 'facturacion.subcuenta' => 'a',
        'facturacion.fechacontabilizado' => 'date',
        'facturacion.contabilizado' => 'boolean',
        'facturacion.emailconta' => 'string',
        'facturacion.enviarmail' => 'boolean',
        'facturacion.mailenviado' => 'boolean',
        'facturacion.pagada' => 'boolean',
        'facturacion.refcliente' => 'string',
    ];

    public function mount(Facturacion $facturacion)
    {
        $this->empresas=Empresa::all();
        $this->condiciones=CondicionPago::all();
        $this->facturacion=$facturacion;
    }

    public function render()
    {
        // dd($this->facturacion);
        return view('livewire.facturacion-create');
    }

    public function save()
    {
        $this->validate();
        $this->facturacion->save();

        return redirect()->route('facturacion.index');
    }

    public function updatedFacturacionFactura()
    {
        $this->validateOnly('facturacion.factura');
    }

}
