@extends('adminlte::page')

@section('title', 'Proveedor')

@section('content_header')
    <h1>Agregar de Proveedor</h1>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.css" />
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
@stop

@section('content')



<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">

            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">Ingresar Datos</span>
                    
                </div>
                <div class="card-body bg-white">

                    
                    
<form action="/proveedor/guardar" method="get">
@csrf
        @method('GET')

                    <div class="mb-3 col-8">
                        <label class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre">
                    </div>


                    <div class="mb-3 col-4">
                        <label class="form-label">Teléfono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese el # telefono">
                    </div>

                    <div class="mb-3 col-4">
                        <label class="form-label">NCR</label>
                        <input type="text" class="form-control" id="ncr" name="ncr" placeholder="Ingrese el NCR">
                    </div>

                    <div class="mb-3 col-4">
                        <label class="form-label">Correo</label>
                        <input type="email" class="form-control" id="correo" name="correo" placeholder="nombre@dominio.com">
                    </div>

                    <div class="mb-3 col-8">
                        <label class="form-label">Dirección</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese la dirección">
                    </div>

                    <div class="mb-3 col-8">
                        <label class="form-label">Artículo o servicio que provee</label>
                        <input type="text" class="form-control" id="articulo" name="articulo" placeholder="Ingrese el articulo">
                    </div>

                    <div class="mb-3 col-4">
                        <label class="form-label">Sitio web</label>
                        <input type="text" class="form-control" id="web" name="web" placeholder="www.dominio.com">
                    </div>

                    <div class="mb-3 col-4">
                        <label class="form-label">Tipo de crédito</label>
                        <input type="text" class="form-control" id="credito" name="credito" placeholder="Ingrese el tipo">
                    </div>

                  

<hr>
<a href="/proveedor">
                    <button type="button" class="btn btn-danger">Cancelar</button> </a>
&nbsp; &nbsp; &nbsp;
                    <button type="submit" class="btn btn-primary">Guardar</button>

                </form>
                </div>
            </div>
        </div>
    </div>
</section>



<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  



@endsection


