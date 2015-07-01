@extends('layouts.master')

@section('sidebar')
     @parent
     Lista de usuarios
@stop

@section('content')
        <h1>Usuarios</h1>
        {{ HTML::link('usuarios/nuevo', 'Crear Usuario'); }}

<ul>
  	@foreach($usuarios as $usuario)
        <li>{{ HTML::link( 'usuarios/'.$usuario->id , $usuario->nombre.' '.$usuario->apellidos ) }} <strong>{{ HTML::link('usuarios/'.$usuario->id.'/eliminar', 'Eliminar'); }}</strong></li>
  	@endforeach
</ul>
@stop