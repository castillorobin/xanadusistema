<?php

namespace App\Http\Controllers;
use App\Models\Cliente;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('cliente.index', compact('clientes'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cliente.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cliente = new Cliente();

        $cliente->Nombre = $request->get('nombre');
        $cliente->DUI = $request->get('dui');
        $cliente->Telefono = $request->get('telefono');
        $cliente->Correo = $request->get('correo');
        $cliente->Direccion = $request->get('direccion');
        
        
        $cliente->save();

        $clientes = Cliente::all();
        return view('cliente.index', compact('clientes'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Cliente::find($id)->delete();
        return redirect()->route('indexc');
    }
}
