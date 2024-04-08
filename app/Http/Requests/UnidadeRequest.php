<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UnidadeRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome_fantasia' => 'required|string|max:30',
            'razao_social' => 'required|string|max:20',
            'cnpj' => 'required|string|size:14|unique:unidades,cnpj',
        ];
    }
}
