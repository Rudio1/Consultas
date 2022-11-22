<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\PrincipalController;
use App\Models\Consultas;

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

Route::get('/', function(){
    return 'a';
})->name('site.index');

Route::get('cadastro', [ConsultaController::class, 'cadastroIndex'])->name('cadastro.index');
Route::post('cadastro', [ConsultaController::class, 'enviarCadastro'])->name('cadastro.index');

Route::get('consulta', [ConsultaController::class, 'consultaIndex'])->name('consulta.index');
Route::post('consulta', [ConsultaController::class, 'enviarConsulta'])->name('consulta.index');

Route::get('editar/adicionar', [ConsultaController::class, 'editarIndex'])->name('editar.index');
Route::post('editar/adicionar', [ConsultaController::class, 'editarIndex'])->name('editar.index');
Route::get('editar/{id}', [ConsultaController::class, 'editarUsers'])->name('editar.putindex');

