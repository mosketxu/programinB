<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedores';
    protected $guarded = ['id']; 

    public function pais()
    {
        return $this->belongsTo(Pais::class);
    }

    public function provincia()
    {
        return $this->belongsTo(Provincia::class);
    }

    public function scopeSearch($query, $busca){
        return $query->where('proveedor', 'LIKE', "%$busca%")
        ->orWhere('nif', 'LIKE', "%$busca%");
    }

}
