@extends('adminlte::page')

@section('title', 'Compra')

@section('content_header')
    <h1>Agregar Compra</h1>
  

@stop

@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.css" />
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">

            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">Ingresar Datos</span>
                    
                </div>
                <div class="card-body bg-white">

                    
                    
                    <form action="/compra/guardarenc" method="get">
                        @csrf
                                @method('GET')
<div class="container">

        <div class="row my-2">

                    <div class="col-6">
                        
                        <div class="input-group">
                        <span class="input-group-text">Fecha</span>
                        <input type="date" class="form-control" id="fecha" name="fecha">
 
                        </div>
                    </div>


                    <div class="col-3">
                    <div class="input-group">
                        <span class="input-group-text" >Credito fiscal</span>
                        <input type="text" class="form-control" id="ccf" name="ccf">

                    </div>
                    </div>

                    <div class="col-3">
                    
                    </div>
        </div>

        <div class="row my-2">

                    <div class=" col-6">
                    <div class="input-group">
                        <span class="input-group-text">Proveedor</span>
                        <select class="form-control" name="proveedor" id="proveedor">
                            @foreach ($proveedores as $proveedor)
                            <option value="{{ $proveedor->Nombre }}">{{ $proveedor->Nombre }}</option>
                            @endforeach
                            
                        </select>
                    </div>
                    </div>

                   
    
        </div>

        <div class="row my-2">

                    <div class="col-6">
                    <div class="input-group">
                        <span class="input-group-text">Nota</span>
                        <textarea name="nota" id="nota" cols="65"></textarea>
                    </div>
                    </div>


                     
        </div>

        
        


        @foreach($productos as $producto)
        
        <input type="text" hidden id="det{{ $producto->id }}" value="{{ $producto->Descripcion }}"> 
        <input type="text" hidden id="can{{ $producto->id }}" value="{{ $producto->Cantidad }}"> 
        <input type="text" hidden id="pre{{ $producto->id }}" value="{{ $producto->Precio }}"> 
        
        @endforeach


      
<hr>
        <div class="row">
            
                   
                    <div class=" col-6 " >
                        
                            <label class="form-label">Productos</label>
                            <select class="form-control js-example-basic-single produ" name="producto" id="producto" onChange="getComboA(this)">
                                @foreach($productos as $producto)
                                <option value="{{$producto->id}}">{{$producto->Nombre}}</option>
                                
                                
                                @endforeach
                                
                            </select>
                       
                    
                    
                    </div>   
                
        </div>
        
        <div class="row">
            <div class="mb-3 col-3">
                <label class="form-label">Descripcion </label>
                        <input type="text" class="form-control" id="detalle" name="detalle" >
            </div>
            <div class=" col-1 " >
            
                <label class="form-label">Cantidad </label>
                        <input type="text" class="form-control" id="cantidad" name="cantidad" onChange="preciounit()">
                
            </div>  
            
            
            <div class=" col-1 " >
            
                <label class="form-label">costo</label>
                        <input type="text" class="form-control" id="precio" name="precio"  onChange="preciounit()">
                
            </div> 
            <div class=" col-1 " >
            
                <label class="form-label">Subtotal</label>
                        <input type="text" class="form-control" id="subtotal" name="subtotal" readonly>
                
            </div> 
            

           
            <div class=" col-3 " >
            
            <button type="submit" class="btn btn-success mt-4" >Agregar</button>
        </form>
            </div>   
</div>
                    
<hr>
<a href="/cotizacion">
                    <button type="button" class="btn btn-danger">Cancelar</button> </a>
&nbsp; &nbsp; &nbsp;
                    <button type="submit" class="btn btn-primary">Guardar</button>

                </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>



<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>





<script>
    function getComboA(selectObject) {
var id = selectObject.value;  
//var cant = document.getElementById('can1').text; 
//var canti = document.getElementById('can' + id).value ;

//document.getElementById("existencia").value = canti;

var deta = document.getElementById('det' + id).value ;

document.getElementById("detalle").value = deta;
document.getElementById("cantidad").focus();

//var preci = document.getElementById('pre' + id).value ;

//document.getElementById("precio").value = preci;

//document.getElementById("total").value = preci * canti ;


}


function preciounit() {

                 const preuni = parseFloat(document.getElementById("precio").value); 
                 const subtotal2 = parseFloat(document.getElementById("cantidad").value); 
                
                 const total = preuni * subtotal2 ;
                 //const total = subtotal;               
                 

document.getElementById("subtotal").value = total ;

}

</script>




<script>
        

        $(document).ready(function() {
         
                              $("#recarga").change(function() {
                                                                            
                 
        
                           });
        

                        });
    </script>

@endsection


