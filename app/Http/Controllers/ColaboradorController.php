<?php

namespace App\Http\Controllers;

use App\Http\Requests\ColaboradorRequest;
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

    public function store(ColaboradorRequest $request)
    {

        //dd($request->all());

        Colaboradores::create($request->all());

    

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


    $unidadesTotalRelatorio = Unidade::all();

    $colaboradoresTotalRelatorio = Colaboradores::all();

    return view('dashboard')
            ->with([
                'search' => $search,
                'colaboradores' => $colaboradores,
                'unidades' => $unidades,

                'colaboradoresTotalRelatorio' => $colaboradoresTotalRelatorio,
                'unidadesTotalRelatorio' => $unidadesTotalRelatorio,
            ]);
    }


}
