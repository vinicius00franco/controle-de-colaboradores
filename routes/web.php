<?php

use App\Http\Controllers\UnidadesController;
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

Route::get('/unidades', [UnidadesController::class, 'index'])->name('unidades.index');

Route::get('/unidades/criar', [UnidadesController::class, 'create'])->name('unidades.create');
Route::post('/unidades/salvar', [UnidadesController::class, 'store'])->name('unidades.store');

Route::get('/unidades/{unidade}/editar', [UnidadesController::class, 'edit'])->name('unidades.edit');
//Route::post('/unidades/atualizar', [UnidadesController::class, 'update'])->name('unidades.update');
//Route::get('/unidades/atualizar', [UnidadesController::class, 'update'])->name('unidades.update');


//Route::post('/unidades/create', [UnidadesController::class, 'create'])->name('unidades.create');
Route::put('/unidades/{unidade}', [UnidadesController::class, 'update'])->name('unidades.update');
Route::delete('/unidades/{unidade}', [UnidadesController::class, 'destroy'])->name('unidades.destroy');


