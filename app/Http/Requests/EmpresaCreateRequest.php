<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpresaCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.A
     *
     * @return array
     */
    public function rules(){
        return [
            'name'=>'required|unique:empresas,name',
            'alias'=>'required|unique:empresas,alias|max:25',
            'tipoempresa'=>'required',
            'codpostal'=>'max:10',
            'nif'=>'max:12',
            'tfno'=>'max:25',
            'cuentacontable'=>'max:10',
            'emailgral' => 'nullable|email:rfc',
            'emailadm'=>'nullable|email:rfc',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'El nombre de la empresa es obligatorio.',
            'name.unique' => 'El nombre de la empresa ya existe.',
            'alias.required' => 'El nombre del alias es obligatorio.',
            'alias.unique' => 'El nombre del alias ya existe.',
            'emailgral.email' => 'Añade un :attribute válido',
            'emailadm.email' => 'Añade un :attribute válido',
            'cuentacontable.max' => 'La Cuenta contable tiene un máximo de 10 caracteres',
            'nif.max' => 'El Nif tiene un máximo de 12 caracteres',
            'tfno.max' => 'El Tfno tiene un máximo de 25 caracteres',
        ];
    }
}
