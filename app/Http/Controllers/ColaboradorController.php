<?php

namespace App\Http\Controllers;

use App\Models\{Colaboradores , Unidade , Cargo};
use App\Services\ColaboradorService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ColaboradorController extends Controller
{


    public function create()
    {
        $unidades = Unidade::all();
        $cargos = Cargo::all();


        return view('colaboradores.create')
            ->with([
                'unidades'=> $unidades,
                'cargos'=> $cargos,
                ]);
    }

    public function store(Request $request, ColaboradorService $criandoColaborador)
    {

        //dd($request->all());

        $data = $request->validate([
            'nome' => 'required|string',
            'email' => 'required|email',
            'cpf' => 'required|string',
            'unidade_id' => 'required|exists:unidades,id',
            'cargo_id' => 'required|exists:cargos,id', // o campo cargo_id é opcional
        ]);
    
        $colaborador = $criandoColaborador->criarColaborador($data);
    
        if ($request->filled('cargo_id')) {
            $colaborador->atribuirCargo($data['cargo_id']);
        }
    

        return redirect()->route('dashboard')
            ->with('success', 'Colaborador criado com sucesso!');
    }


    public function show(Request $request)
    {
    // Obtendo todas as unidades sem paginação
    $unidades = Unidade::orderBy('created_at', 'asc')->paginate(6);

    // Obtendo o valor do campo de pesquisa
    $search = $request->input('query');

    if ($search) {

        $colaboradores = Colaboradores::where('cpf', 'like', '%'.$search.'%')
                                    ->orWhere('email', 'like', '%'.$search.'%')
                                    ->orWhere('nome', 'like', '%'.$search.'%')
                                    ->with('cargos', 'unidades:id')
                                    ->get();
    } else {
        $colaboradores = Colaboradores::orderBy('created_at', 'asc')
                                ->with('cargos', 'unidades:id')
                                ->paginate(6);
    }

    return view('dashboard')
            ->with([
                'search' => $search,
                'colaboradores' => $colaboradores,
                'unidades' => $unidades,
            ]);
    }


    public function showAll(Request $request)
    {
    // Obtendo todas as unidades sem paginação
    $unidades = Unidade::orderBy('created_at', 'asc')->paginate(6);


    $colaboradores = Colaboradores::orderBy('created_at', 'asc')
                                ->with('cargos', 'unidades:id')
                                ->paginate(6);

    return view('dashboard')
            ->with([
                'colaboradores' => $colaboradores,
                'unidades' => $unidades,
            ]);
    }


}
