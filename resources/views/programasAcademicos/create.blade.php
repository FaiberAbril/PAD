@extends('template.principal') 
@section('titulo','Principal')

@section('contenido','Bienvenido')
@section('formularios')
    {!!Form::open(['route'=>'programasAcademicos.store', 'method'=>'POST'])!!}
       
        <div class="form-group">
            {!!Form::label('Codigo del Programa Academico')!!}
            {!!Form::text('codigo_programa',null , array('class'=>'form-control'))!!}
        </div>
         <div class="form-group">
            {!!Form::label('Nombre')!!}
            {!!Form::text('nombre_programa',null , array('class'=>'form-control'))!!}
        </div>
        <div class="form-group">
            {!!Form::label('Facultad')!!}
            {!!Form::text('nombre_facultad',null , array('class'=>'form-control'))!!} 

        </div>               
        {!!Form::submit('Crear',array('class'=>'btn btn-success'))!!}
    {!!Form::close()!!}
@endsection