@extends('layouts.principal')<!--trae las caracteristicas del principal como el navigator-->
@section('hijos')
<h1>Editar empleado</h1>

<div class="container">
<div class="row">
<div class="col">
<!--metodo post hace referencia al store en el controlador-->

<form action="/empleado/{{$editar->id}}" method="POST">
    @csrf
    @method('PUT') 
    <div class="mb-3">
    <label for="">Codigo Empleado</label>
    <input type="text" name="codigoEmpleado" id="codigoEmpleado" value="{{$editar->codempleado}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Nombre</label>
    <input type="text" name="nombre" id="nombre" value="{{$editar->nombre}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Apellido</label>
    <input type="text" name="apellido" id="apellido" value="{{$editar->apellido}}" class="form-control">
    </div>
    <div class="mb-3">
    <label for="">Nivel</label>
    <input type="text" name="nivel" id="nivel" value="{{$editar->nivel}}" class="form-control">
    </div>
    <div class="mb-3">
    <label for="">Telefono</label>
    <input type="text" name="telefono" id="telefono" value="{{$editar->telefono}}" class="form-control">
    </div>

<button type="submit">Actualizar</button>
</form>

</div>
</div>
</div>

@endsection