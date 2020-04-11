<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactoRequest extends FormRequest
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
            'empresa'=>'required',
            'codpostal'=>'max:10',
            'nif'=>'max:12',
            'tfno'=>'max:50',
            'emailgral' => 'nullable|email:rfc',
            'emailadm'=>'nullable|email:rfc',
        ];

        if ($this->getMethod() == 'POST') {
            $rules += [
                'nif'=>'unique:empresas,nif',
            ];
        }
        return $rules;
    }

    public function messages(){
        return [
            'empresa.required' => 'El nombre del contacto es obligatorio.',
            'emailgral.email' => 'Añade un :attribute válido',
            'emailadm.email' => 'Añade un :attribute válido',
            'nif.unique' => 'El Nif ya existe',
            'nif.max' => 'El Nif tiene un máximo de 12 caracteres',
            'tfno.max' => 'El Tfno tiene un máximo de 25 caracteres',
        ];
    }
}
