<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facturacion extends Model
{
    use HasFactory;

    public $fillable=['factura','fechafactura','empresa_id','fechavto','condpago_id','fechacontabilizado','contabilizado','emailconta','enviarmail','mailenviado','pagada','refcliente'];

    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }
    public function facturaciondetalle()
    {
        return $this->hasMany(FacturacionDetalle::class);
    }
    public function condpago()
    {
        return $this->belongsTo(CondicionPago::class);
    }
}
