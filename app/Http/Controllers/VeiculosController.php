<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use App\Models\Veiculos;
use Illuminate\Http\Request;

class VeiculosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($clienteId)
    {
        $cliente = Clientes::findOrFail($clienteId);

        return view('veiculos.create', ['cliente' => $cliente]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function novo($id)
    {
        $cliente = Clientes::findOrFail($id);

        return view('veiculos.create', ['cliente' => $cliente]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        Veiculos::create($data);

        $clientes = Clientes::all();
        return view("clientes.index", ['clientes' => $clientes]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $veiculo = Veiculos::findOrFail($id);
        return view('veiculos.edit', ['veiculo' => $veiculo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $veiculo = Veiculos::findOrFail($id);

        $veiculo->update($request->all());

        $clientes = Clientes::all();
        return view("clientes.index", ['clientes' => $clientes]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $veiculo = Veiculos::findOrFail($id);
        $veiculo->delete();

        $clientes = Clientes::all();
        return view("clientes.index", ['clientes' => $clientes]);
    }
}
