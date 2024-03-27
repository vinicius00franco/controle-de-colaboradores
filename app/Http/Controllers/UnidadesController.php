<?php

namespace App\Http\Controllers;

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


    public function store(Request $request)
    {

        Unidade::create($request->all());


        return redirect()
            ->route('dashboard');
    }



    // public function edit(Unidade $unidade)
    // {

    //     return view('unidades.edit')
    //         ->with('unidade', $unidade);
    // }


    // public function update(Request $request, Unidade $unidade)
    // {
    //     $unidade->update($request->all());
        
    //     return redirect()->route('unidades.index');
    // }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy(Unidade $unidade)
//     {
//         $unidade->delete();

//         return redirect()
//             ->route('unidades.index');
//     }
}
