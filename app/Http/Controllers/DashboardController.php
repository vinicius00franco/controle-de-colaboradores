<?php

namespace App\Http\Controllers;

use App\Models\{Unidade , Colaboradores};
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $unidadesTotalRelatorio = Unidade::all();

        $colaboradoresTotalRelatorio = Colaboradores::all();
        //dd($request->all());

        // query null
        $unidades = Unidade::orderBy('created_at', 'asc')
            ->paginate(6);

        $colaboradores = Colaboradores::orderBy('created_at', 'asc')
            ->with('cargos', 'unidades:id')
            ->paginate(6);



        //dd($colaboradores);

        return view('dashboard')
            ->with([
                'unidades' => $unidades,
                'colaboradores' => $colaboradores,
                'colaboradoresTotalRelatorio' => $colaboradoresTotalRelatorio,
                'unidadesTotalRelatorio' => $unidadesTotalRelatorio,

            ]);
    }
}