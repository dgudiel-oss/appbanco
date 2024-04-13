@extends('layouts.principal')<!--trae las caracteristicas del principal como el navigator-->
@section('hijos')
<h1>Editar afiliado</h1>

<div class="container">
<div class="row">
<div class="col">
<!--metodo post hace referencia al store en el controlador-->

<form action="/afiliado/{{$editar->id}}" method="POST">
    @csrf
    @method('PUT') 
    <div class="mb-3">
    <label for="">Codigo Afiliado</label>
    <input type="text" name="codigoAfiliado" id="codigoAfiliado" value="{{$editar->iliado}}" class="form-control">
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
    <label for="">Ciudad</label>
    <input type="text" name="ciudad" id="ciudad" value="{{$editar->ciudad}}" class="form-control">
    </div>
    <div class="mb-3">
    <label for="">Telefono</label>
    <input type="text" name="telefono" id="telefono" value="{{$editar->telefono}}" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Edad</label>
    <input type="text" name="edad" id="edad" value="{{$editar->edad}}" class="form-control">
    </div>

<button type="submit">Actualizar</button>
</form>

</div>
</div>
</div>

@endsection