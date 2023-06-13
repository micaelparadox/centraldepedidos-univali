<?php

namespace App\Http\Requests\Compra;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompraRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'valor' => 'required|numeric',
            'cliente_id' => 'required|exists:clientes,id',
        ];
    }
}
