
@extends('template.principal') 
@section('titulo',' Usuarios')
@section('contenido','Usuarios')
@section('formularios')
        
        <div>
        <a href="{{ url('usuarios/create') }}" class="btn btn-success ">Nuevo Usuario</a>
        </div>		
         <br>
		@if(Session::has('message'))
		<div class="alert alert-success alert-dismissible" role="alert">
			{{Session::get('message')}}
		</div>
		@endif
		<table class="table table-hover" >
		<thead>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Tipo Documento</th>
			<th>Documento</th>
			<th>Celular</th>
			<th>Correo</th>
			<th>Usuario</th>
			<th>Perfil</th>
			<th>Programa Academico</th>
			<th colspan="2">Opciones</th>
		</thead>
		@foreach($usuarios as $user)
		<tbody>
			<td>{{$user->nombres}}</td>
			<td>{{$user->apellidos}}</td>
			<td>{{$user->tipo_documento}}</td>
			<td>{{$user->documento}}</td>
			<td>{{$user->celular}}</td>
			<td>{{$user->correo}}</td>
			<td>{{$user->nombreusuario}}</td>
			<td>{{$user->cod_perfil}}</td>
			<td>{{$user->cod_programa}}</td>
			<td>{!!link_to_route('usuarios.edit', $title = 'Editar', $parameters = $user->cod_usuario, $attributes = [])!!}</td>
			<td>{!!link_to_route('usuarios.index', $title = 'Crear', $parameters = [], $attributes = [])!!}</td>
		</tbody>

		</table>
	   @endforeach
   @endsection
    
    
  
 




