<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cotizacion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</head>
<body>

    

   
        <div class="row">

            <div class="col-md-12 text-center">
                <h3>Factura</h3>
                
            </div>
            



                                                  
                    
             
        <div class="row">
    
            <div class="col-12 text-center">
             <h5>Santos Alberto Guerrero Beltran</h5>
                <h4>MOTEL SANTORINI</h4>
                <H5>17 Av. Sur y Calle Santa Cruz #7</H5>
                <H5>Callejon Ferrocaril, Santa Ana</H5>
    
    
            </div>
     
   
    
            <div class="row ">
    
                <div class="col-12">
                    <div class="input-group">
                        <span class="input-group-text">Fecha</span>
                        <input type="text" class="form-control" id="fecha" name="fecha" value="{{ $cotiactual[0]->fecha}}" readonly>
                    </div>
                </div>
            </div>
    
    
    
    
                       
    
    
                      
         <input type="text" class="form-control" id="codigo" name="codigo" value="{{ $cotiactual[0]->codigo}}" hidden>
    
                       
    
                        
           
    
            <div class="row ">
    
                <div class="col-12">
                            
                    <div class="input-group">
                    <span class="input-group-text">Cliente</span>
                    <input type="text" class="form-control"  value="{{ $cotiactual[0]->cliente}}" readonly>
    
                    </div>
                </div>
        
            </div>
            <div class="row">
    
                <div class="col-12">
                <div class="input-group">
                    <span class="input-group-text">NIT/DUI</span>
                    <input type="text" class="form-control" id="dui" name="dui" value="{{ $cotiactual[0]->DUI}}" readonly>
                </div>
                </div>
    
    
            </div>
    
    
            <div class="row ">
    
                        <div class="col-12">
                        <div class="input-group">
                            <span class="input-group-text">Direccion</span>
                            <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $cotiactual[0]->direccion}}" readonly>
                        </div>
                        </div>
    
    
            </div>
    
    <table id="prove" class="">
        <thead >
            <tr >
                
                <th scope="col">Detalle</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio</th>
                <th scope="col">Total</th>
              
                
            </tr>
        </thead>
        <tbody>{{ $subtotal=0 }}{{ $turismo=0 }}
            
            @for ($i=0; $i< count($detalles); $i++)
            <tr >
            <td>{{ $detalles[$i]->descripcion }}</td>
           
            <td>{{ $detalles[$i]->cantidad }}</td>
            <td>${{ $detalles[$i]->preciouni }}</td>
            <td>${{ $detalles[$i]->total }}</td>
            
            {{ $subtotal = $subtotal + $detalles[$i]->total }}
           
            </tr>
            @endfor
    
            {{ $turismo= $subtotal * 0.05 }}
            <tr >
                <td style="text-align: center; border: 0px solid black; "></td>
                <td style="text-align: center; border: 0px solid black; "></td>
                
               
                <td style="text-align: center;">Subtotal: </td>
                <td style="text-align: center;">$ {{ round($subtotal,2 )}}</td>
              
            
               
                </tr>
                <tr >
                    <td style="text-align: center; border: 0px solid black; "></td>
                    <td style="text-align: center; border: 0px solid black; "></td>
                   
                    <td style="text-align: center; font-size:13px;">Impuesto Turismo: </td>
                    <td style="text-align: center;">$ {{ round($turismo,2)}}</td>
                  
                
                   
                    </tr>
                    <tr >
                        <td style="text-align: center; border: 0px solid black; "></td>
                        <td style="text-align: center; border: 0px solid black; "></td>
                       
                        <td style="text-align: center; ">Total: </td>
                        <td style="text-align: center;">$ {{ round( $subtotal + $turismo, 2)}}</td>
                      
                    
                       
                        </tr>    
        </tbody>
    
        </table>
                        
    <hr>
  
    
                   
                    </div>
                </div>
            </div>
       
    </section>
    
    <script>
        /*
        window.print();
        setTimeout(saludos, 3000);
        
        function saludos(){
            window.location.href = '/facturacion';
        }
        */
        </script>


</body>
</html>