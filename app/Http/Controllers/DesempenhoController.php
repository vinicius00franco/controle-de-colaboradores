<?php

namespace App\Http\Controllers;

use App\Models\Colaboradores;
use Illuminate\Http\Request;

class DesempenhoController extends Controller
{


    public function edit(Colaboradores $colaborador)
    {
        return view('desempenho.edit', compact('colaborador'));
    }

    public function update(Request $request, Colaboradores $colaborador)
    {
        $colaborador->update(['nota_desempenho' => $request->nota_desempenho]);

        return redirect()->route('colaboradores.index')->with('success', 'Nota de desempenho atualizada com sucesso.');
    }
}
