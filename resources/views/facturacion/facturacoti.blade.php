<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cotizacion</title>

    
</head>
<body>
    

<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">

            <div class="card card-default">
                
                <div class="card-body bg-white">

                    
<div class="container">
<img src="../public/logo.jpg" alt="" width="200px" style="margin-left:180px;">


        <div class="row my-2">
        <table border="1"> 
    <tr>
        <td style="width:200px;">
        <div class="col-6">
                        
                        <div class="input-group">
                        <span class="input-group-text">Atencion: </span>
                        <span class="input-group-text">{{ $cotiactual[0]->nombre}}</span>
                        
 
                        </div>
                    </div>
        </td>
        <td style="width:200px;" rowspan="2">
        <div class="col-3">
                    <div class="input-group">
                        <span class="input-group-text" >Cotización: </span>
                        <span class="input-group-text">{{ $cotiactual[0]->codigo}}</span>

                    </div>
                    </div>
        </td>

        <td rowspan="2">
            <div class="col-4">
                <div class="input-group">
                    <span class="input-group-text">Fecha: </span>
                    <span class="input-group-text">{{ $cotiactual[0]->fecha}}</span>
                    
                </div>
                </div>
        </td>
        </tr>

                    

        <tr>
            <td style="width:200px;">
                   
        <div class="row my-2">

            <div class=" col-6">
            <div class="input-group">
                <span class="input-group-text">Empresa: </span>
                <span class="input-group-text">{{ $cotiactual[0]->empresa}}</span>
               
            </div>
            </div>

</div>
</td>


</tr>
<tr>
    <td style="width:200px;">
        <div class="col-6">
            <div class="input-group">
                <span class="input-group-text">Ubicación: </span>
                <span class="input-group-text">{{ $cotiactual[0]->direccion}}</span>
               
            </div>
            </div>
    </td>
    <td colspan="2">
        <div class="col-6">
            <div class="input-group">
            <span class="input-group-text">Contacto 1: </span>
            <span class="input-group-text">{{ $cotiactual[0]->contacto1}}</span>
            
        </div>    
        </div>     
    </td>
    
</tr>

<tr>
    <td style="width:200px;">
        <div class="col-6">
            <div class="input-group">
                <span class="input-group-text">Orden: </span>
                <span class="input-group-text">{{ $cotiactual[0]->orden}}</span>
               
            </div>
            </div>
    </td>
    <td colspan="2">
        <div class="col-6">
            <div class="input-group">
            <span class="input-group-text">Contacto 2: </span>
            <span class="input-group-text">{{ $cotiactual[0]->contacto2}}</span>
            
        </div>    
        </div>     
    </td>
    
</tr>


<tr>
    <td style="width:200px;">
        <div class="col-6">
            <div class="input-group">
                <span class="input-group-text">Garantia del trabajo: </span>
                <span class="input-group-text">{{ $cotiactual[0]->garantia}}</span>
               
            </div>
            </div>
    </td>
    <td colspan="2">
        <div class="col-6">
            <div class="input-group">
            <span class="input-group-text">Registro: </span>
            <span class="input-group-text">{{ $cotiactual[0]->NCR}}</span>
            
        </div>    
        </div>     
    </td>
    
</tr>

<tr>
    <td style="width:200px; border: 0px solid black; " >
        
    </td>
    <td colspan="2">
        <div class="col-6">
            <div class="input-group">
            <span class="input-group-text">Email: </span>
            <span class="input-group-text">{{ $cotiactual[0]->correo}}</span>
            
        </div>    
        </div>     
    </td>
    
</tr>
<br>
<tr>
    <td style="width:200px;" >
     
        <span class="input-group-text">Tenemos el gusto de cotizarle:</span> 
    </td>
    <td colspan="2">
        <div class="col-6">
            <div class="input-group">
            <span class="input-group-text">Proveedor: </span>
            <span class="input-group-text">{{ $cotiactual[0]->correo}}</span>
            
        </div>    
        </div>     
    </td>
    
</tr>
</table>

<br>
        </div>


         </div>  
        </div>

      
           
          
          
            
</div>

<table id="prove" class="table table-bordered shadow-lg mt-4 cell-border" border="1">
    <thead >
        <tr style="background-color:#033dc2; color:white;" >
            
            <th scope="col" style="width:400px; text-align: center;">Detalle</th>
            <th scope="col" style="width:60px; text-align: center;">Cantidad</th>
            <th scope="col" style="width:60px; text-align: center;">Costo</th>
           
        </tr>
    </thead>
    <tbody>
        {{ $subtotal = 0; }}
        @for ($i=0; $i< count($detalles); $i++)
        
        <tr >
        <td >{{ $detalles[$i]->descripcion }}</td>
       
        <td style="text-align: center;">{{ $detalles[$i]->cantidad }}</td>
        <td style="text-align: center;">${{ $detalles[$i]->preciouni }}</td>
        {{ $subtotal = $subtotal + $detalles[$i]->total; }}
    
       
        </tr>
        @endfor
        <tr >
            <td style="text-align: center; border: 0px solid black; "></td>
           
            <td style="text-align: center;">Subtotal: </td>
            <td style="text-align: center;">${{ $subtotal }}</td>
          
        
           
            </tr>
            <tr >
                <td style="text-align: center; border: 0px solid black; "></td>
               
                <td style="text-align: center; font-size:13px;">13% IVA: </td>
                <td style="text-align: center;">${{ round($subtotal * 0.13, 2) }}</td>
              
            
               
                </tr>
                <tr >
                    <td style="text-align: center; border: 0px solid black; "></td>
                   
                    <td style="text-align: center; ">Total: </td>
                    <td style="text-align: center;">${{ round($subtotal +( $subtotal * 0.13), 2) }}</td>
                  
                
                   
                    </tr>        

    </tbody>

    </table>
                    

                </div>
            </div>
        </div>
    </div>
</section>




</body>
</html>