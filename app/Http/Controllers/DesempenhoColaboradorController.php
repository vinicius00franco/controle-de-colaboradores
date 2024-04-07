<?php

namespace App\Http\Controllers;

use App\Models\{Colaboradores , Cargo};
use Illuminate\Http\Request;

class DesempenhoColaboradorController extends Controller
{
    public function create(Request $request, Colaboradores $colaborador )
    {
        $cargos = Cargo::all();

        return view('desempenhos.create')
                    ->with([
                        'colaborador' => $colaborador,
                        'cargos' => $cargos
                    ]);
    }

    public function store(Request $request,Colaboradores $colaborador)
    {
        //$mensagemSucesso = 'Desempenho do colaborador registrado com sucesso!';

        // Obtém o cargo selecionado pelo usuário
        $cargoId = $request->input('cargo_id');

        //dd($cargoId);

        // Obtém o desempenho informado pelo usuário
        $notaDesempenho = $request->input('nota_desempenho');

        // Encontra o cargo associado ao colaborador
        $cargo = Cargo::find($cargoId);

        // Cria um novo registro de desempenho para o cargo específico
        $colaborador->cargos()->attach($cargoId, ['nota_desempenho' => $notaDesempenho]);

        return redirect()->route('dashboard');
                    //->with('success', $mensagemSucesso);
    }

    public function edit(Colaboradores $colaborador)
    {


        $cargo = $colaborador->cargos->first();

        // Buscar o desempenho do colaborador pelo ID do colaborador
        $desempenho = $colaborador->cargos->first()->pivot->nota_desempenho;
        //$colaborador_model = Colaboradores::where('id', $colaborador)->first();
        //dd($colaborador);

        return view('desempenhos.edit')
                    ->with([
                        'colaborador' => $colaborador ,
                        'desempenho' => $desempenho ,
                        'cargo' => $cargo 
                    ]);
    }

    public function update(Request $request, Colaboradores $colaborador)
    {
        $desempenho = $colaborador->cargos->first()->pivot;

        $desempenho->update(['nota_desempenho' => $request->nota_desempenho]);

        return redirect()->route('dashboard');
                    //->with('success', 'Desempenho do colaborador atualizado com sucesso!');
    }
}
