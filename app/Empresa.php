<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empresa extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'tipoempresa_id', 'direccion',
        'codpostal', 'localidad', 'provincia_id', 'pais_id',
        'cifnif', 'tfno', 'emailgral', 'emailadm', 'web', 'idioma', 'cuentacontable',
        'marta', 'susana', 'observaciones', 'estado'
      ];
}
