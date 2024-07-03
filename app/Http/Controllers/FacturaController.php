<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factura;
use App\Models\Cliente;
use App\Models\Producto;
use App\Models\Cotidetalle;
use Carbon\Carbon;

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     */ 
    public function index()
    {
        $cotizaciones = Factura::all();
        return view('facturacion.index', compact('cotizaciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       /* $marca=Cotidetalle::all();
     foreach($marca as $mar){
        $mar->delete();
     }*/

        //$clientes = Cliente::all();
        $ultimoid = Factura::latest('id')->first();
       $idcompr = $ultimoid->id + 1;

       $date = Carbon::now();
       $date = $date->format('Y');
       $codigocoti = "C"."".$date."".$idcompr;

        $productos = Producto::all();
        return view('facturacion.crear', compact('productos', 'codigocoti'));
    }

    public function ver($id)
    {
        //$proveedores = Proveedor::all();
        $detalles = Cotidetalle::where('coticode', $id)->get();
        $cotiactual = Factura::where('codigo', $id)->get();
        return view('facturacion.ver', compact('cotiactual', 'detalles'));
    }

    public function verpdf($id)
    {
        //$proveedores = Proveedor::all();
        $detalles = Cotidetalle::where('coticode', $id)->get();
        $cotiactual = Factura::where('codigo', $id)->get();

        $pdf = PDF::loadView('facturacion.facturacoti', ['detalles'=>$detalles, 'cotiactual'=>$cotiactual]);
        return $pdf->stream(); 

        //return view('cotizacion.ver', compact('cotiactual', 'detalles'));
    }

    public function detalleconcabe(Request $request)
    {

        $ultimoid = Factura::latest('id')->first();
       $idcompr = $ultimoid->id + 1;
       $date = Carbon::now();
            $date = $date->format('Y');
            $codigo = "$date".$idcompr;
        

        $cotienca = new Factura();
        $cotienca->cliente = $request->get('cliente');
        $cotienca->codigo = $codigo;
        $cotienca->fecha = $request->get('fecha');
        
        $cotienca->DUI = $request->get('dui');
        $cotienca->direccion = $request->get('direccion');
        

        $cotienca->save();

        $cotiactual = Factura::where('codigo', $codigo)->get();

       $linea = new Cotidetalle();
       $linea->coticode = $codigo;
       $linea->descripcion = $request->get('detalle');
       $linea->cantidad = $request->get('cantidad');
       $linea->preciouni = $request->get('precio');
       $linea->total = $request->get('total');
      

       $linea->save();
       $detalles = Cotidetalle::where('coticode', $codigo)->get();


        //$detalles=Cotidetalle::all();
        //$clientes = Cliente::all();
        $productos = Producto::all();
        return view('facturacion.agregardetalle', compact('productos', 'detalles', 'cotiactual'));
    }



    

    /**
     * Store a newly created resource in storage. 
     */

     public function detalleadd(Request $request)
     {
        //$detalles = new Cotidetalle();

        $codigo = $request->get('codigo');

        $detalle = new Cotidetalle();
        
        $detalle->coticode = $codigo;
        $detalle->descripcion = $request->get('detalle');
        $detalle->cantidad = $request->get('cantidad');
        $detalle->preciouni = $request->get('precio');
        $detalle->total = $request->get('total');
        $detalle->recargado = $request->get('recarga');
        $detalle->preciorecargo = $request->get('unirecarga');
        $detalle->save();
        
        

        $cotiactual = Factura::where('codigo', $codigo)->get();
       //$detalles = Cotidetalle::all();
       $detalles = Cotidetalle::where('coticode', $codigo)->get();
       //$clientes = Cliente::all();
        $productos = Producto::all();
       return view('facturacion.agregardetalle', compact('productos', 'detalles', 'cotiactual'));
         
     }

     public function borrardet($id)
    {
        Cotidetalle::find($id)->delete();
        $detalles = Cotidetalle::all();
       $clientes = Cliente::all();
        $productos = Producto::all();
       return view('facturacion.agregardetalle', compact('clientes', 'productos', 'detalles'));
    }
 
    public function store(Request $request)
    {
        //
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
        //
    }
}
