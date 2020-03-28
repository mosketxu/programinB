<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empresa extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name','alias','nif', 'tipoempresa', 'direccion',
        'codpostal', 'localidad', 'provincia_id', 'pais_id',
        'cifnif', 'tfno', 'emailgral', 'emailadm', 'web', 'idioma', 'cuentacontable',
        'observaciones', 'estado'
      ];

    public function scopeSearch($query, $busca){
        return $query->where('name', 'LIKE', "%$busca%");
    }
  
}
