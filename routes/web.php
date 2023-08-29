<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ServicosController;
use App\Http\Controllers\VeiculosController;
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

Route::get('/', function () {
    return view('index');
});

Route::resource('/clientes', ClientesController::class);

Route::get('/clientes/{cliente}/servicos', [ClientesController::class, 'servicos'])->name('clientes.servicos');

Route::resource('/veiculos', VeiculosController::class);

Route::get('/veiculos/novo/{id}', [VeiculosController::class, 'novo'])->name('veiculos.novo');

Route::get('/buscar-veiculos/{clienteId}',  [VeiculosController::class, 'buscarVeiculos']);

Route::resource('/servicos', ServicosController::class);
