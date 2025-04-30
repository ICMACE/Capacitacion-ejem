@extends('welcome')
@section('content')
<section class="col-lg-12" style="padding-top: 2em;">
    <!-- Map box -->
    <div class="box box-solid">
        <div class="box-header">
            <h3 class="box-title">
            Sucursales
            </h3>
        </div>
        <div class="box-body">

            <button class="btn btn-primary" onclick="openMOdalSucursal()">Agregar sucursal</button>
            <table class="table" id="tablaResultados">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Nombre</th>
                        <th style="width: 40px">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($elementos as $elemento)
                        @if ($elemento->state == 1)    
                            <tr>
                                <td>{{ $elemento->id }}</td>
                                <td>{{ $elemento->name }}</td>
                                <td>
                                    <button class="btn btn-warning btnEditarSucursal" 
                                    data-toggle="modal" data-target="#modalbranchedit" idSucursal="{{ $elemento->id }}"
                                    ><i class="fa fa-edit"></i></button>
                                    <a href="{{ route('branches.changeState',['id'=>$elemento->id,'state'=>0]) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="box-footer no-border"></div>
    </div>
</section>
{{--  onclick="openMOdalSucursalEdit({{ $elemento->id }})" --}}

<div class="modal" tabindex="-1" role="dialog" id="modal-branch">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Agregar sucursal</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('branches.store') }}" method="post">
            @csrf
        <div class="modal-body">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-building"></i></span>
                <input type="text" class="form-control" name="name" placeholder="Nombre de la sucursal" required>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary" >Guardar sucursal</button>
        </div>
        </form>
      </div>
    </div>
</div>
<div class="modal fade" id="modalbranchedit" tabindex="-1" aria-labelledby="tituloModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color:aquamarine;">
          <h5 class="modal-title">Editar sucursal</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('branches.update') }}" method="post">
            @csrf
            @method('PUT')
            <input type="text" name="id" id="idEditar" hidden>
        <div class="modal-body">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-building"></i></span>
                <input type="text" class="form-control" name="nombreEditar" required>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary" >Actualizar sucursal</button>
        </div>
        </form>
      </div>
    </div>
</div>
@endsection
@section('js')
<script>
$(".table").on('click','.btnEditarSucursal',function(){
    let idSucursal = $(this).attr('idSucursal');
    $.ajax({
        url: 'branches/'+idSucursal+'/edit/',
        type: 'GET',
        success: function(sucursal){
            $("#nombreEditar").val(sucursal.name);
            $("#idEditar").val(sucursal.id);
        }
    }) 
});
openMOdalSucursal = function(){
    $('#modal-branch').modal('show');
}
openMOdalSucursalEdit = function(id){
    $('#modalbranchedit').modal('show');
}
$(document).ready(function () {
    
});
</script>
@if (Session::has('success'))
<script>
Swal.fire({
    icon: 'success',
    title: 'Exito',
    text: '{{ Session::get('success') }}',
    showConfirmButton: false,
    timer: 1500
})
</script>
@endif
@endsection