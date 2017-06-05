@extends('template.principal') 
@section('titulo',' Grupo')
@section('contenido','Grupos')
@section('formularios')
   
    {!!Form::open(['route'=>'grupos.store', 'method'=>'POST'])!!}
        <div class="form-group">
            {!!Form::label('Codigo')!!}
            {!!Form::text('codigo_grupo',null, array('class'=>'form-control'))!!}
        </div>
         <div class="form-group">
            {!!Form::label('Nombre')!!}
            {!!Form::text('nombre_grupo',null, array('class'=>'form-control'))!!}
        </div>       
        {!!Form::submit('Crear',array('class'=>'btn btn-success'))!!}
    {!!Form::close()!!}
@endsection