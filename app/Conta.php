<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    protected $guarded = ['id'];  

    public function scopeSearch($query, $busca){
        return $query->where('fechaasiento', 'LIKE', "%$busca%");
    }

    public function scopeFiltro($query,$anyo,$perI,$perF)
    {
        return $query->whereYear('fechaasiento', $anyo)
        ->whereMonth('fechaasiento','>=',$perI)
        ->whereMonth('fechaasiento','<=',$perF);
    }
     
    public function provclis()
    {
        return $this->belongsTo(Provcli::class,'provcli_id')->withDefault('');
    }

}
