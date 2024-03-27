<?php
// app/Services/ColaboradorService.php

namespace App\Services;

use App\Models\Colaboradores;
use Illuminate\Http\Request;

class ColaboradorService
{
    public function criarColaborador(array $dados)
    {
        return Colaboradores::create([
            'nome' => $dados['nome'],
            'email' => $dados['email'],
            'cpf' => $dados['cpf'],
            'unidade_id' => $dados['unidade_id'],
        ]);
    }

    // Outros métodos para manipular os colaboradores
}
