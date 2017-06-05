
@extends('template.principal') 
@section('titulo',' Perfil')
@section('contenido','Perfiles')
@section('formularios')

       <div>
        <a href="{{ url('perfiles/create') }}" class="btn btn-success ">Nuevo Perfil</a>
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
        <th colspan="3">Opciones</th>
    </thead>
    @foreach($perfiles as $perfil)
    <tbody>
        <td>{{$perfil->cod_perfil}}</td>
        <td>{{$perfil->nombre_perfil}}</td>
        <td>

        {!!link_to_route('perfiles.edit', $title = 'Editar', $parameters = $perfil->cod_perfil, $attributes = [])!!}</td>
{{--        <td>{!!link_to_route('perfiles.create', $title = 'Crear', $parameters = [], $attributes = [])!!}</td>--}}
       <td>{!!link_to_action('PerfilesController@destroy', $title = 'Eliminar', $parameters = $perfil->cod_perfil, $attributes = [])!!}</td>
    </tbody>
    @endforeach
    </table>
@endsection
    