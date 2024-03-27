<?php

use App\Http\Controllers\{ColaboradorController, 
                        UnidadesController,
                         DesempenhoColaboradorController,
                         DashboardController
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

Route::get('/colaboradores', [ColaboradorController::class, 'index'])->name('colaboradores.index');
Route::post('/colaboradores', [ColaboradorController::class, 'store'])->name('colaboradores.store');
Route::get('/colaboradores/create', [ColaboradorController::class, 'create'])->name('colaboradores.create');

Route::get('/colaboradores/search', [ColaboradorController::class, 'show'])->name('colaboradores.show');


Route::get('/colaboradores/{colaborador}/edit', [ColaboradorController::class, 'edit'])->name('colaboradores.edit');
Route::put('/colaboradores/{colaborador}', [ColaboradorController::class, 'update'])->name('colaboradores.update');
Route::delete('/colaboradores/{colaborador}', [ColaboradorController::class, 'destroy'])->name('colaboradores.destroy');


Route::get('colaboradores/{colaborador}/desempenho', [DesempenhoColaboradorController::class, 'create'])->name('colaboradores.desempenho.create');
Route::post('colaboradores/{colaborador}/desempenho', [DesempenhoColaboradorController::class,'store'])->name('colaboradores.desempenho.store');
Route::get('colaboradores/{colaborador}/desempenho/edit', [DesempenhoColaboradorController::class, 'edit'])->name('colaboradores.desempenho.edit');
Route::put('colaboradores/{colaborador}/desempenho', [DesempenhoColaboradorController::class ,'update'])->name('colaboradores.desempenho.update');

