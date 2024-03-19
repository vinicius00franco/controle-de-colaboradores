<?php

use App\Http\Controllers\{ColaboradorController, UnidadesController, DesempenhoController};
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('/unidades', UnidadesController::class);
Route::resource('/colaboradores', ColaboradorController::class);

Route::post('/colaboradores/{colaborador}/desempenho', [DesempenhoController::class, 'store'])->name('desempenho.store');
Route::put('/colaboradores/{colaborador}/desempenho', [DesempenhoController::class, 'update'])->name('desempenho.update');

// Route::get('relatorios/colaboradores', 'RelatorioController@colaboradores');
// Route::get('relatorios/total-colaboradores', 'RelatorioController@totalColaboradores');
// Route::get('relatorios/ranking-colaboradores', 'RelatorioController@rankingColaboradores');




// Route::get('/unidades', [UnidadesController::class, 'index'])->name('unidades.index');

// Route::get('/unidades/criar', [UnidadesController::class, 'create'])->name('unidades.create');
// Route::post('/unidades/salvar', [UnidadesController::class, 'store'])->name('unidades.store');

// Route::get('/unidades/{unidade}/editar', [UnidadesController::class, 'edit'])->name('unidades.edit');

// Route::put('/unidades/{unidade}', [UnidadesController::class, 'update'])->name('unidades.update');
// Route::delete('/unidades/{unidade}', [UnidadesController::class, 'destroy'])->name('unidades.destroy');


// Route::get('/desempenhos', [DesempenhoController::class, 'index'])->name('desempenho.index');

// Route::get('/desempenhos/criar', [DesempenhoController::class, 'create'])->name('desempenho.create');
// Route::post('/desempenhos/salvar', [DesempenhoController::class, 'store'])->name('desempenho.store');

// Route::get('/desempenhos/{desempenho}/editar', [DesempenhoController::class, 'edit'])->name('desempenho.edit');

// Route::put('/desempenhos/{desempenho}', [DesempenhoController::class, 'update'])->name('unidades.update');
// Route::delete('/desempenhos/{unidade}', [DesempenhoController::class, 'destroy'])->name('unidades.destroy');


