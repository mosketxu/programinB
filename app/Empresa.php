<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empresa extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];

      public function pais()
      {
          return $this->belongsTo(Pais::class);
      }

      public function contactos()
      {
          return $this->hasMany(EmpresaContacto::class);
      }

      public function pus()
      {
          return $this->hasMany(Pu::class);
      }

      public function contaperiodos()
      {
          return $this->hasMany(ContaPeriodo::class);
      }

      public function recurrentes()
      {
          return $this->hasMany(ContaRecurrente::class);
      }

      public function suma()
      {
          return $this->belongsTo(Suma::class);
      }

      public function provincia()
      {
          return $this->belongsTo(Provincia::class);
      }
      
      public function condicionpago()
      {
          return $this->belongsTo(CondicionPago::class);
      }
      public function periodofacturacion()
      {
          return $this->belongsTo(PeriodoFacturacion::class);
      }

    public function scopeSearch($query, $busca){
        return $query->where('empresa', 'LIKE', "%$busca%")
        ->orWhere('nif', 'LIKE', "%$busca%");
    }
  
}
