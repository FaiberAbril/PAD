
@extends('template.principal') 
@section('titulo',' Usuarios')
@section('contenido','Crear Perfiles')
@section('formularios')

   
    {!!Form::open(['route'=>'perfiles.store', 'method'=>'POST'])!!}
        <div class="form-group">
            {!!Form::label('Nombre')!!}
            {!!Form::text('nombre_perfil',null ,array('class'=>'form-control') )!!}
        </div>
        {!!Form::submit('Crear',array('class'=>'btn btn-success'))!!}
    {!!Form::close()!!}


 @endsection
    