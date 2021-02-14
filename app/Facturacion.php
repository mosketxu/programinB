<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Facturacion extends Model
{
    use HasFactory;


    public $fillable=['factura','fechafactura','empresa_id','fechavto','condpago_id','fechacontabilizado','contabilizado','emailconta','enviaremail','mailenviado','pagada','refcliente'];

    const CONDICIONES_LIST = [
        '' => 'Todos',
        '1' => 'Sí',
        '0' => 'No'
    ];

    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }
    public function facturaciondetalles()
    {
        return $this->hasMany(FacturacionDetalle::class);
    }
    public function metodopago()
    {
        return $this->belongsTo(MetodoPago::class);
    }

    public function getTotal()
    {
        return number_format($this->facturacionDetalles()->sum(DB::raw('unidades * coste * (1+iva)')),2);

    }

}
