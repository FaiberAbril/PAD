@extends('template.principal') 
@section('titulo',' Asignatura')
@section('contenido','Asignaturas')
@section('formularios')
   
    {!!Form::model($grupos, ['route'=>['grupos.update',$grupos->cod_grupo], 'method'=>'PUT'])!!}
        <div class="form-group">
            {!!Form::label('Codigo')!!}
            {!!Form::text('codigo_grupo',null , array('class'=>'form-control'))!!}
        </div>
         <div class="form-group">
            {!!Form::label('Nombre')!!}
            {!!Form::text('nombre_grupo',null , array('class'=>'form-control'))!!}
        </div>       
        {!!Form::submit('Actualizar',array('class'=>'btn btn-success'))!!}
    {!!Form::close()!!}
@endsection