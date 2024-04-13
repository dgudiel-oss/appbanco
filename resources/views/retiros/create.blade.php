@extends('layouts.principal')<!--trae las caracteristicas del principal como el navigator-->
@section('hijos')
<h1>Crear retiro</h1>
<div class="container">
<div class="row">
<div class="col">
<!--metodo post hace referencia al store en el controlador-->

<form action="/retiro" method="POST">
    @csrf
    <div class="mb-3">
    <label for="">Codigo empleado</label>
    <input type="text" name="codempleado"   class="form-control" value="{{$id}}">
    </div>

    <div class="mb-3">
    <label for="">Codigo Afiliado</label>
    <input type="text" name="codafiliado"  class="form-control" value="{{$id2}}">
    </div>

    <div class="mb-3">
    <label for="">Fecha</label>
    <input type="text" name="fecha"  class="form-control">
    </div>
    <div class="mb-3">
    <label for="">Monto</label>
    <input type="text" name="monto"  class="form-control">
    </div>
    
<button type="submit">Guardar</button>
</form>

</div>
</div>
</div>
@endsection