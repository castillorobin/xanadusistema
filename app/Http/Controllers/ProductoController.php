<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Proveedor;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::all();
        return view('producto.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $proveedores = Proveedor::all();
        return view('producto.crear', compact('proveedores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $producto = new Producto();

        $producto->Nombre = $request->get('nombre');
        $producto->Descripcion = $request->get('descripcion');
        $producto->Categoria = $request->get('categoria');
        $producto->Proveedor = $request->get('proveedor');
        $producto->Precio = $request->get('precio');
        $producto->Cantidad = $request->get('cantidad');
        $producto->Unidad_medida = $request->get('unidad');
        
        $producto->save();

        $productos = Producto::all();
        return view('producto.index', compact('productos'));
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
        Producto::find($id)->delete();
        return redirect()->route('indexpr');
    }
}
