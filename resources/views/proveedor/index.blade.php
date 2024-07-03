@extends('adminlte::page')

@section('title', 'Proveedor')

@section('content_header')
    <h1>Listado de Proveedores</h1>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.css" />
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
@stop

@section('content')



<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">

            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">Proveedores</span>
                    <a href="/proveedor/crear">
                    <button type="button" class="btn btn-success" style="float: right;">Agregar Proveedor</button>
                </a>
                </div>
                <div class="card-body bg-white">


                    <table id="prove" class="table table-bordered shadow-lg mt-4 cell-border">
                        <thead >
                            <tr >
                                
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Direccion</th>
                                <th scope="col">Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @for ($i=0; $i< count($proveedores); $i++)
                            <tr >
                            <td>{{ $proveedores[$i]->id }}</td>
                           
                            <td>{{ $proveedores[$i]->Nombre }}</td>
                            <td>{{ $proveedores[$i]->Telefono }}</td>
                            <td>{{ $proveedores[$i]->Direccion }}</td>
                        
                            <td class="opciones text-center" style="">
                                <a href="/proveedor/ver">
                                <button type="button" class="btn btn-primary"><i class="fas fa-eye"></i></button>
                            </a>           

                            <a href="/proveedor/editar/{{ $proveedores[$i]->id }}">
                                <button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button>
                            </a>

                                <a href="/proveedor/borrar/{{ $proveedores[$i]->id }}">
                                <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                </a>
 
                            </td>
                            </tr>
                            @endfor
                        </tbody>

                        </table>
                        



                    
                </div>
            </div>
        </div>
    </div>
</section>



<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  
<script src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>


<script>
     /*
$(document).ready( function () {
    $('#prove').DataTable();
} );
*/

new DataTable('#prove', {
    
    
});

</script>



@endsection


