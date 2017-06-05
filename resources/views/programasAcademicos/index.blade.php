@extends('template.principal') 
@section('titulo','Principal')

@section('contenido','Bienvenido')
@section('formularios')
   
   <div>
        <a href="{{ url('programasAcademicos/create') }}" class="btn btn-success ">Nuevo Programa Academico</a>
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
        <th>Facultad</th>
        <th colspan="2">Opciones</th>
    </thead>
    @foreach($programasAcademicos as $programa)
    <tbody>
        <td>{{$programa->codigo_programa}}</td>
        <td>{{$programa->nombre_programa}}</td>
        <td>{{$programa->nombre_facultad}}</td>
        <td>{!!link_to_route('programasAcademicos.edit', $title = 'Editar', $parameters = $programa->cod_programa, $attributes = [])!!}</td>
        <td>{!!link_to_route('programasAcademicos.create', $title = 'Crear', $parameters = [], $attributes = [])!!}</td>
    </tbody>
    @endforeach
    </table>
@endsection
