@extends('layouts.principal')<!--trae las caracteristicas del principal como el navigator-->
@section('hijos')
<h1>Empleado: {{$empleado->nombre}} {{$empleado->apellido}} </h1>
<h1>Modulo de depositos afiliados: {{$afiliado->id}} {{$afiliado->nombre}} {{$afiliado->apellido}}</h1>

<a href="/deposito/create/{{$empleado->codempleado}}/{{$afiliado->codafiliado}}" class="btn btn-info">Realizar deposito</a>
<table class="table">
<thead>
    <tr>
        <th>ID</th>
        <th>Codigo de empleado</th>
        <th>codigo de ailiado</th>
        <th>Fecha</th>
        <th>Monto</th>
        <th>Acciones</th>
    </tr>
</thead>

<tbody>
    @foreach($depositos as $deposito)
    @if($deposito->codafiliado==$afiliado->id)
    <tr>
    <th>{{$deposito->id}}</th>
    <th>{{$deposito->codempleado}}</th>
        <th>{{$deposito->codafiliado}}</th>
        <th>{{$deposito->fecha}}</th>
        <th>{{$deposito->monto}}</th>
        <th>

    </th>
    </tr>
    @endif
    @endforeach
</tbody>

</table>
@endsection