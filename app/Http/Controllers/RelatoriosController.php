<?php

namespace App\Http\Controllers;

use App\Models\Colaboradores;
use App\Models\Unidade;

class RelatoriosController extends Controller
{


    public function totalColaboradoresPorUnidade()
    {
        $unidades = Unidade::all();

        return view('components.colaboradores.report-tabela')
                ->with('unidades' , $unidades);
    }

    public function rankingMelhoresAvaliados()
    {
        $colaboradores = Colaboradores::with('unidades', 'cargos')
            ->orderByDesc('nota_desempenho')
            ->get();

        return view('relatorios.ranking_melhores_avaliados')
                ->with('colaboradores' , $colaboradores);
        
    }
}
