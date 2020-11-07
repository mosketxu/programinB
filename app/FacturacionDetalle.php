<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacturacionDetalle extends Model
{
    use HasFactory;

    public $fillable=['facturacion_id','concepto','unidades','coste','iva','subcuenta','email','suplido','pagadopor'];

    public function facturacion()
    {
        return $this->belongsTo(Facturacion::class);
    }


}
