@extends('template.principal') 
@section('titulo',' Grupo')
@section('contenido','Grupos')
@section('formularios')
   
   
     <div>
        <a href="{{ url('grupos/create') }}" class="btn btn-success ">Nuevo grupo</a>
        </div>		
         <br>
    @if(Session::has('message'))
    <div class="alert alert-success alert-dismissible" role="alert">
        {{Session::get('message')}}
    </div>
    @endif
    <table class="table table-hover">
    <thead>
        <th>Codigo</th>
        <th>Nombre</th>
        <th colspan="2">Opciones</th>
    </thead>
    @foreach($grupos as $gru)
    <tbody>
        <td>{{$gru->codigo_grupo}}</td>
        <td>{{$gru->nombre_grupo}}</td>
        <td>{!!link_to_route('grupos.edit', $title = 'Editar', $parameters = $gru->cod_grupo, $attributes = [])!!}</td>
        <td>{!!link_to_route('grupos.create', $title = 'Crear', $parameters = [], $attributes = [])!!}</td>
    </tbody>
    @endforeach
    </table>
@endsection