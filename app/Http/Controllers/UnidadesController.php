<?php

namespace App\Http\Controllers;

use App\Http\Requests\UnidadeRequest;
use App\Models\Unidade;
use Illuminate\Http\Request;

class UnidadesController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('unidades.create');
    }


    public function store(UnidadeRequest $request)
    {

        Unidade::create($request->all());


        return redirect()
            ->route('dashboard')
            ->with('success', 'Unidade cadastrada com sucesso!');
    }


}
