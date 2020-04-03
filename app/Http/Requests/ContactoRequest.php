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
            'alias'=>'required|max:25',
            'codpostal'=>'max:10',
            'nif'=>'max:12',
            'tfno'=>'max:15',
            'emailgral' => 'nullable|email:rfc',
            'emailadm'=>'nullable|email:rfc',
        ];

        if ($this->getMethod() == 'POST') {
            $rules += [
                'alias'=>'unique:empresas,alias',
            ];
        }
        return $rules;
    }

    public function messages(){
        return [
            'empresa.required' => 'El nombre del contacto es obligatorio.',
            'alias.required' => 'El nombre del alias es obligatorio.',
            'alias.unique' => 'El nombre del alias ya existe.',
            'emailgral.email' => 'Añade un :attribute válido',
            'emailadm.email' => 'Añade un :attribute válido',
            'nif.max' => 'El Nif tiene un máximo de 12 caracteres',
            'tfno.max' => 'El Tfno tiene un máximo de 25 caracteres',
        ];
    }
}
