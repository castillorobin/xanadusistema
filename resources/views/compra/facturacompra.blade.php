<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Compras</title>

    
</head>
<body>
    


    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.css" />
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">

            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title"></span>
                    
                </div>
                <div class="card-body bg-white">

                    
                    
                    
<div class="container">
    <img src="../public/logo.jpg" alt="" width="200px" style="margin-left:180px;">
        <div class="row my-2">
<table>
    <tr>
        <td style="width:200px;">
                    <div class="col-6">
                        
                        <div class="input-group">
                        <span class="input-group-text">Fecha: </span>
                        <span class="input-group-text">{{ $ultimoid->Fecha}}</span>
                       
                        
                        </div>
                    </div>
                    </td>
                    <td>

                    <div class="col-3">
                    <div class="input-group">
                        <span class="input-group-text" >Credito fiscal: </span>
                        <span class="input-group-text" >{{ $ultimoid->CCF}}</span>
                        

                    </div>
                    </div>

                    </td>
                    </tr>

                    <tr>
                        <td>
                        <div class=" col-6">
                    <div class="input-group">
                        <span class="input-group-text">Proveedor:</span>
                        <span class="input-group-text">{{ $ultimoid->Proveedor}}</span>
                        
                    </div>
                    </div>
                        </td>
                        <td>
                        <div class="col-3">
                    <div class="input-group">
                        <span class="input-group-text">Total: </span>
                        <span class="input-group-text">{{ $ultimoid->Total}}</span>
                       
                    </div>
                    </div>
                        </td>
                    </tr>
                    
        </div>

       
        <div class="row my-2">

                    <div class="col-6">
                    <div class="input-group">
                        <span class="input-group-text">Nota</span>
                        <textarea name="nota" id="nota" cols="65" readonly>{{ $ultimoid->Nota}}</textarea>
                    </div>
                    </div>


                     
        </div>

        </table>
      
<hr>
        <div class="row">
            
                   
                    <div class=" col-3 " >
                    
                    
                    
                    </div>   
                
        </div>
        
      

<table id="prove" class="table table-bordered shadow-lg mt-4 cell-border" style="">
    <thead >
        <tr >
        
            <th scope="col" style="border-bottom: 1px solid black;">Descripcion</th>
            <th scope="col" style="border-bottom: 1px solid black;">Cantidad</th>
            <th scope="col" style="border-bottom: 1px solid black;">Costo</th>
            <th scope="col" style="border-bottom: 1px solid black;">Subtotal</th>
           
        </tr>
    </thead>
    <tbody>
        
        @for ($i=0; $i< count($detalles); $i++)
        <tr >
        <td style="width:400px; border-bottom: 1px solid black;">{{ $detalles[$i]->descripcion}}</td>
       
        <td style="width:80px; text-align: center; border-bottom: 1px solid black;">{{ $detalles[$i]->cantidad }}</td>
        <td style="width:80px; text-align: center; border-bottom: 1px solid black;">${{ $detalles[$i]->preciouni }}</td>
        <td style="width:80px; text-align: center; border-bottom: 1px solid black;">${{ $detalles[$i]->subtotal }}</td>
        
    
        
        </tr>
        @endfor
    </tbody>

    </table>
                    


                </div>
                </div>
            </div>
        </div>
    </div>
</section>






</body>
</html>