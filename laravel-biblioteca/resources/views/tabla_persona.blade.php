@extends('layout.Layout_Main')                  <!-- NO TOCAR-->
<!-- Section("NO TOCAR", "COLOCAR TEXTO") -->
@section('TITULO_PAGINA', 'Tabla persona')      <!-- Titulo de la pagina -->
@section('PAG_GRUPO', 'Modulos')                <!-- El modulo que pertenece la paginal -->
@section('content')                             <!-- section() y endsection() siempre van -->


<div class="card">
    <div class="card-header">
      <h3 class="card-title">DataTable with minimal features & hover style</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example2" class="table table-bordered table-hover">
        <thead>
            <tr>
            <th>Rendering engine</th>
            <th>Browser</th>
            <th>Platform(s)</th>
            <th>Engine version</th>
            <th>CSS grade</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>Trident</td>
            <td>Internet Explorer 4.0 </td>
            <td>Win 95+</td>
            <td> 4</td>
            <td>
                <button type="button" class="btn btn-primary">Editar</button>
                <button type="button" class="btn btn-primary">ver</button>
                <button type="button" class="btn btn-primary">eliminar</button>
            </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
            <th>Rendering engine</th>
            <th>Browser</th>
            <th>Platform(s)</th>
            <th>Engine version</th>
            <th>CSS grade</th>
            </tr>
        </tfoot>

      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->


@endsection
