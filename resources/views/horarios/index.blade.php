@extends('template.principal') 
@section('titulo',' Horarios')
@section('contenido','Horarios')
@section('formularios')
   
   
     <div>
        <a href="{{ url('horarios/create') }}" class="btn btn-success ">Nuevo horarios</a>
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
        <th>Dia de la Semana</th>
        <th>Estado</th>
        <th>Fecha Incio</th>
        <th>Fecha Fin</th>
        <th colspan="2">Opciones</th>
    </thead>
    @foreach($horarios as $horario)
    <tbody>
        <td>{{$horario->codigo_horario}}</td>
        <td>{{$horario->dia_semana}}</td>
        <td>{{$horario->estado}}</td>
        <td>{{$horario->hora_inicio}}</td>
        <td>{{$horario->hora_fin}}</td>
        <td>{!!link_to_route('horarios.edit', $title = 'Editar', $parameters = $horario->cod_horario, $attributes = [])!!}</td>
        <td>{!!link_to_route('horarios.create', $title = 'Crear', $parameters = [], $attributes = [])!!}</td>
    </tbody>
    @endforeach
    </table>
@endsection