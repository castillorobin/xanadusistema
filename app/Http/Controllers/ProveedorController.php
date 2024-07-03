<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proveedores = Proveedor::all();
        return view('proveedor.index', compact('proveedores'));
    }
    public function ver()
    {
        $proveedores = Proveedor::all();
        return view('proveedor.index', compact('proveedores'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proveedor.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $proveedor = new Proveedor();

        $proveedor->Nombre = $request->get('nombre');
        $proveedor->NCR = $request->get('ncr');
        $proveedor->Telefono = $request->get('telefono');
        $proveedor->Correo = $request->get('correo');
        $proveedor->Direccion = $request->get('direccion');
        $proveedor->Articulos = $request->get('articulo');
        $proveedor->Sitio_web = $request->get('web');
        $proveedor->Tipo_credito = $request->get('credito');
        
        
        $proveedor->save();

        $proveedores = Proveedor::all();
        return view('proveedor.index', compact('proveedores'));

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $proveedor = Proveedor::all();
        return view('proveedor.index', compact('proveedores'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $proveedor = Proveedor::find($id);
        return view('proveedor.editar', compact('proveedor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $proveedor = Proveedor::find($id);

        $proveedor->Nombre = $request->get('nombre');
        $proveedor->NCR = $request->get('ncr');
        $proveedor->Telefono = $request->get('telefono');
        $proveedor->Correo = $request->get('correo');
        $proveedor->Direccion = $request->get('direccion');
        $proveedor->Articulos = $request->get('articulo');
        $proveedor->Sitio_web = $request->get('web');
        $proveedor->Tipo_credito = $request->get('credito');
        
        
        $proveedor->save();

        return redirect()->route('indexp');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Proveedor::find($id)->delete();
        return redirect()->route('indexp');
    }
}
