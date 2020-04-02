<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpresaContacto extends Model
{
    protected $table = 'empresa_contacto';
    protected $fillable = ['empresa_id','contacto_id'];

    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }

    public function contacto()
    {
        return $this->belongsTo(Contacto::class);
    }

}
