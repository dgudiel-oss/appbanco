@extends('layouts.principal')<!--trae las caracteristicas del principal como el navigator-->
@section('hijos')
<h1>Eliminar empleado</h1>
<div class="container">
<div class="row">
<div class="col">
<!--metodo post hace referencia al store en el controlador-->

<form action="/empleado/{{$eliminar->id}}" method="POST">
    @csrf
    @method('Delete') 
    <div class="mb-3">
    <label for="">Codigo Empleado</label>
    <input type="text" name="codigoEmpleado" id="codigoEmpleado" value="{{$eliminar->codempleado}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Nombre</label>
    <input type="text" name="nombre" id="nombre" value="{{$eliminar->nombre}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Apellido</label>
    <input type="text" name="apellido" id="apellido" value="{{$eliminar->apellido}}" class="form-control">
    </div>
    <div class="mb-3">
    <label for="">Nivel</label>
    <input type="text" name="nivel" id="nivel" value="{{$eliminar->nivel}}" class="form-control">
    </div>
    <div class="mb-3">
    <label for="">Telefono</label>
    <input type="text" name="telefono" id="telefono" value="{{$eliminar->telefono}}" class="form-control">
    </div>

<button type="submit">Eliminar</button>
</form>

</div>
</div>
</div>

@endsection