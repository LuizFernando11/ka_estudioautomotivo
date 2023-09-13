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

Route::get('/logado', function () {
    return view('logado');
})->middleware(['auth']);

Route::resource('/clientes', ClientesController::class)->middleware(['auth']);

Route::get('/clientes/{cliente}/servicos', [ClientesController::class, 'servicos'])->name('clientes.servicos')->middleware(['auth']);

Route::resource('/veiculos', VeiculosController::class)->middleware(['auth']);

Route::get('/veiculos/novo/{id}', [VeiculosController::class, 'novo'])->name('veiculos.novo')->middleware(['auth']);

Route::get('/buscar-veiculos/{clienteId}',  [VeiculosController::class, 'buscarVeiculos'])->middleware(['auth']);

Route::resource('/servicos', ServicosController::class)->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/home', function () {
    return view('index');
});
Route::get('/sobre', function () {
    return view('pagesStaticasDeslogadas\sobre');
});
Route::get('/contato', function () {
    return view('pagesStaticasDeslogadas\contato');
});
Route::get('/endereco', function () {
    return view('pagesStaticasDeslogadas\endereco');
});
