<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeriodoFacturacion extends Model
{
    protected $table = 'periodo_facturaciones';
    public $incrementing = false;

    protected $fillable = ['periodofacturacion','periodo']; 
}
