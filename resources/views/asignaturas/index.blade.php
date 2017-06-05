
@extends('template.principal') 
@section('titulo',' Asignatura')
@section('contenido','Asignaturas')
@section('formularios')
   
   
     <div>
        <a href="{{ url('asignaturas/create') }}" class="btn btn-success ">Nuevo Asignatura</a>
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
        <th>Htd</th>
        <th>Hta</th>
        <th>Creditos</th>
        <th>Programa Academico</th>
        <th colspan="2">Opciones</th>
    </thead>
    @foreach($asignaturas as $asig)
    <tbody>
        <td>{{$asig->codigo_asignatura}}</td>
        <td>{{$asig->nombre_asignatura}}</td>
        <td>{{$asig->htd}}</td>
        <td>{{$asig->hta}}</td>
        <td>{{$asig->creditos}}</td>
        <td>{{$asig->cod_programa}}</td>
        <td>{!!link_to_route('asignaturas.edit', $title = 'Editar', $parameters = $asig->cod_asignatura, $attributes = [])!!}</td>
        <td>{!!link_to_route('asignaturas.create', $title = 'Crear', $parameters = [], $attributes = [])!!}</td>
    </tbody>
    @endforeach
    </table>

@endsection




