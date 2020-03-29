<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeriodoFacturacion extends Model
{
    protected $table = 'periodo_facturaciones';
    protected $fillable = ['periodofacturacion','periodo'];
}
