<?php

use App\Http\Controllers\{ColaboradorController, 
                        UnidadesController,
                         DesempenhoColaboradorController,
                         DashboardController,
                         RelatoriosController
                        };
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

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('/unidades', UnidadesController::class);

Route::get('/dashboard/colaboradores', [ColaboradorController::class, 'index'])->name('colaboradores.index');
Route::post('/dashboard/colaboradores', [ColaboradorController::class, 'store'])->name('colaboradores.store');
Route::get('/dashboard/colaboradores/create', [ColaboradorController::class, 'create'])->name('colaboradores.create');

Route::get('/dashboard/colaboradores/search', [ColaboradorController::class, 'show'])->name('colaboradores.show');


Route::get('/dashboard/colaboradores/{colaborador}/edit', [ColaboradorController::class, 'edit'])->name('colaboradores.edit');
Route::put('/dashboard/colaboradores/{colaborador}', [ColaboradorController::class, 'update'])->name('colaboradores.update');
Route::delete('/dashboard/colaboradores/{colaborador}', [ColaboradorController::class, 'destroy'])->name('colaboradores.destroy');


Route::get('/dashboard/colaboradores/{colaborador}/desempenho', [DesempenhoColaboradorController::class, 'create'])->name('colaboradores.desempenho.create');
Route::post('/dashboard/colaboradores/{colaborador}/desempenho', [DesempenhoColaboradorController::class,'store'])->name('colaboradores.desempenho.store');
Route::get('/dashboard/colaboradores/{colaborador}/desempenho/edit', [DesempenhoColaboradorController::class, 'edit'])->name('colaboradores.desempenho.edit');
Route::put('/dashboard/colaboradores/{colaborador}/desempenho', [DesempenhoColaboradorController::class ,'update'])->name('colaboradores.desempenho.update');


// rota para meu relatorio onde faço a busca
Route::get('/dashboard/relatorios/colaboradores-por-unidade', [RelatoriosController::class, 'totalColaboradoresPorUnidade'])->name('relatorios.colaboradores_por_uniddade');
Route::get('/dashboard/relatorios/ranking-melhores-avaliados', [RelatoriosController::class, 'rankingMelhoresAvaliados'])->name('relatorios.ranking_melhores_avaliados');