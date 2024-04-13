@extends('layouts.principal')<!--trae las caracteristicas del principal como el navigator-->
@section('hijos')
<h1>Crear empleado</h1>
<div class="container">
<div class="row">
<div class="col">
<!--metodo post hace referencia al store en el controlador-->

<form action="/empleado" method="POST">
    @csrf
    <div class="mb-3">
    <label for="">Codigo Empleado</label>
    <input type="text" name="codigoEmpleado"  class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Nombre</label>
    <input type="text" name="nombre"  class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Apellido</label>
    <input type="text" name="apellido"  class="form-control">
    </div>
    <div class="mb-3">
    <label for="">Nivel</label>
    <input type="text" name="nivel"  class="form-control">
    </div>
    <div class="mb-3">
    <label for="">Telefono</label>
    <input type="text" name="telefono"  class="form-control">
    </div>

<button type="submit">Guardar</button>
</form>

</div>
</div>
</div>

@endsection