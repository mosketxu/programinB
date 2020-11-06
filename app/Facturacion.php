<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facturacion extends Model
{
    use HasFactory;

    public $fillable=['factura','fechafactura','fechavto','fechaexport','empresa_id','condpago_id','mailenviado','pagada','refcliente','email'];

    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }
    public function condpago()
    {
        return $this->belongsTo(CondicionPago::class);
    }
}
