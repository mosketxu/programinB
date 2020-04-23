<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecibidasRequest extends FormRequest
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
            'fechaasiento'=>'required|date',
            'fechafactura'=>'nullable|date',
            'provcli_id'=>'required',
            'base21'=>'nullable|numeric',
            'iva21'=>'nullable|numeric',
            'base10'=>'nullable|numeric',
            'iva10'=>'nullable|numeric',
            'base4'=>'nullable|numeric',
            'iva4'=>'nullable|numeric',
            'exento'=>'nullable|numeric',
            'baseretencion'=>'nullable|numeric',
            'porcentajeretencion'=>'nullable|numeric',
            'retencion'=>'nullable|numeric',
        ];

        return $rules;
    }

    public function messages(){
        return [
            'provcli_id.required'=>'El proveedor es obligatorio',
            'fechaasiento.required'=>'La fecha asiento es obligatoria',
            'fechaasiento.date'=>'La fecha asiento debe ser tipo fecha',
            'fechafactura.date'=>'La fecha factura debe ser tipo fecha',
            'base21'=>'La base al 21 debe ser numerica',
            'iva21'=>'El IVA al 21 debe ser numerica',
            'base10'=>'La base al 10 debe ser numerica',
            'iva10'=>'El IVA al 10 debe ser numerica',
            'base4'=>'La base al 4 debe ser numerica',
            'iva4'=>'El IVA al 4 debe ser numerica',
            'exento'=>'El valor exento debe ser numerico',
            'baseretencion'=>'La base de rentencion debe ser numerica',
            'porcentajeretencion'=>'El % de retención debe ser numerico',
            'retencion'=>'La retención debe ser numerica',
        ];
    }
}
