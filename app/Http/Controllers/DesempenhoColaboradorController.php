<?php

namespace App\Http\Controllers;

use App\Models\Colaboradores;
use Illuminate\Http\Request;

class DesempenhoColaboradorController extends Controller
{
    public function create(Request $request, Colaboradores $colaborador)
    {
        $colaborador = Colaboradores::create($request->all());
        return view('desempenho.create')
                    ->with(
                        $colaborador , 'colaborador'
                    );
    }

    public function store(Request $request,Colaboradores $colaborador)
    {
        $mensagemSucesso = 'Desempenho do colaborador registrado com sucesso!';

        $colaborador = Colaboradores::with($colaborador);
        $colaborador->desempenho()->create($request->all());
        return redirect()->route('colaboradores.index')
                    ->with('success', $mensagemSucesso);
    }

    public function edit(Colaboradores $colaborador)
    {

        $desempenho = $colaborador->desempenho;
        return view('desempenho.edit')
                    ->with([
                        $colaborador => 'colaborador' ,
                        $desempenho => 'desempenho'
                    ]);
    }

    public function update(Request $request, Colaboradores $colaborador)
    {
        $colaborador->desempenho()
                ->update($request->all());

        return redirect()->route('colaboradores.index'
                        )->with('success', 'Desempenho do colaborador atualizado com sucesso!');
    }
}
