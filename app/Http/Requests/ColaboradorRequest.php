<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ColaboradorRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => 'required|string|max:255',
            'cpf' => 'required|string|size:11|unique:colaboradores,cpf',
            'email' => 'required|string|email|max:255|unique:colaboradores,email',
        ];
    }
}
