<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpresaRequest extends FormRequest
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
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(){
        $rules= [
            'empresa'=>'required|unique:empresas,empresa',
            'tipoempresa'=>'required',
            'cliente'=>'required',
            'codpostal'=>'max:10',
            'nif'=>'max:12',
            'tfno'=>'max:50',
            'cuentacontable'=>'max:10',
            'emailgral' => 'nullable|email:rfc',
            'emailadm'=>'nullable|email:rfc',
        ];

        if ($this->getMethod() == 'POST') {
            $rules += [
                'empresa'=>'unique:empresas,empresa',
                'nif'=>'unique:empresas,nif',
            ];
        }

        return $rules;
    }

    public function messages(){
        return [
            'empresa.required' => 'El nombre de la empresa es obligatorio.',
            'empresa.unique' => 'El nombre de la empresa ya existe.',
            'tipoempresa.required' => 'El tipo de empresa es obligatorio.',
            'cliente.required' => 'El campo cliente es obligatorio.',
            'emailgral.email' => 'Añade un :attribute válido',
            'emailadm.email' => 'Añade un :attribute válido',
            'cuentacontable.max' => 'La Cuenta contable tiene un máximo de 10 caracteres',
            'nif.max' => 'El Nif tiene un máximo de 12 caracteres',
            'tfno.max' => 'El Tfno tiene un máximo de 25 caracteres',
        ];
    }
}
