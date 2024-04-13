@extends('layouts.principal')<!--trae las caracteristicas del principal como el navigator-->
@section('hijos')
<h1>Modulo de empleados</h1>

<a href="empleado/create" class="btn btn-primary">Crear nuevo empleado </a>
<!--btn primary es para crear un boton con clase-->

<table class="table">
<thead>
    <tr>
        <th>ID</th>
        <th>Codigo de Empleado</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Nivel</th>
        <th>Telefono</th>
        <th>Acciones</th>
    </tr>
</thead>

<tbody>
    @foreach($empleados as $empleado)
    <tr>
    <th>{{$empleado->id}}</th>
        <th>{{$empleado->codempleado}}</th>
        <th>{{$empleado->nombre}}</th>
        <th>{{$empleado->apellido}}</th>
        <th>{{$empleado->nivel}}</th>
        <th>{{$empleado->telefono}}</th>
        <th>
        <a href="/empleado/{{$empleado->id}}/edit" class="btn btn-info">Editar</a>
        <a href="afiliado/{{$empleado->id}}" class="btn btn-success">Afiliados</a>
       <a href="/empleado/{{$empleado->id}}" class="btn btn-warning">Eliminar</a>
    </th>
    </tr>
    @endforeach
</tbody>

</table>
@endsection