<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProveedorRequest extends FormRequest
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
    public function rules()
    {
        $rules= [
            'proveedor'=>'required',
            'nif'=>'max:12',
        ];

        if ($this->getMethod() == 'POST') {
            $rules += [
                'proveedor'=>'unique:proveedores,proveedor',
                'nif'=>'unique:proveedores,nif',
            ];
        }

        return $rules;
    }

    public function messages(){
        return [
            'proveedor.required' => 'El nombre del proveedor es obligatorio.',
            'proveedor.unique' => 'El nombre del proveedor ya existe.',
            'nif.unique' => 'El nif ya existe.',
            'nif.max' => 'El Nif tiene un máximo de 12 caracteres',
        ];
    }


}
