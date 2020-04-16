<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provcli extends Model
{
    protected $table = 'provclis';
    protected $guarded = ['id']; 

    public function pais()
    {
        return $this->belongsTo(Pais::class);
    }

    public function provincia()
    {
        return $this->belongsTo(Provincia::class);
    }

    public function contas()
    {
        return $this->hasMany(Conta::class);
    }

    public function scopeSearch($query, $busca){
        return $query->where('nombre', 'LIKE', "%$busca%")
        ->orWhere('nif', 'LIKE', "%$busca%");
    }

}
