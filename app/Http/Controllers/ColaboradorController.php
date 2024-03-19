<?php

namespace App\Http\Controllers;

use App\Models\{Colaboradores , Unidades , Cargos};
use Illuminate\Http\Request;

class ColaboradorController extends Controller
{
    public function index()
    {

        dd(Colaboradores::with('unidades', 'cargos')->get());

        $colaboradores = Colaboradores::with('unidades', 'cargos')->get();
        return view('colaboradores.index')
            ->with('colaboradores',$colaboradores);
    }

    public function create()
    {
        $unidades = Unidades::all();
        $cargos = Cargos::all();
        return view('colaboradores.create')
            ->with(['unidades' => $unidades,
                  'cargos' => $cargos
                ]);
    }

    public function store(Request $request)
    {
        // Validação dos dados do formulário

        Colaboradores::create($request->all());

        return redirect()->route('colaboradores.index')
                ->with('success', 'Colaborador criado com sucesso.');
    }
}
