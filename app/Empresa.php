<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empresa extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'empresa','alias','nif', 'tipoempresa', 'direccion',
        'codpostal', 'localidad', 'provincia_id', 'pais_id',
        'cifnif', 'tfno', 'emailgral', 'emailadm', 'web', 'idioma', 'cuentacontable',
        'observaciones', 'estado'
      ];

      public function pais()
      {
          return $this->belongsTo(Pais::class);
      }

      public function provincia()
      {
          return $this->belongsTo(Provincia::class);
      }
      

    public function scopeSearch($query, $busca){
        return $query->where('empresa', 'LIKE', "%$busca%")
        ->orWhere('alias', 'LIKE', "%$busca%");
    }
  
}
