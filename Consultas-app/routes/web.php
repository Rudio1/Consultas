<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultaController;

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

Route::get('/', function () {
    return 'consulta enviada com sucesso';
})->name('index');

Route::get('consulta', [ConsultaController::class, 'consulta'])->name('consulta');
Route::post('consulta', [ConsultaController::class, 'salvarConsulta'])->name('teste.consulta');
