@extends('template.principal') 
@section('titulo',' Asignatura')
@section('contenido','Asignaturas')
@section('formularios')
    {!!Form::model($asignaturas, ['route'=>['asignaturas.update',$asignaturas->cod_asignatura], 'method'=>'PUT'])!!}
        <div class="form-group">
            {!!Form::label('Codigo')!!}
            {!!Form::text('codigo_asignatura',null,array('class'=>'form-control'))!!}
        </div>
        <div class="form-group">
            {!!Form::label('Nombre')!!}
            {!!Form::text('nombre_asignatura',null,array('class'=>'form-control'))!!}
        </div>
        <div class="form-group">
            {!!Form::label('Htd')!!}
            {!!Form::text('htd',null,array('class'=>'form-control'))!!}
        </div>   
        <div class="form-group">
            {!!Form::label('Hta')!!}
            {!!Form::text('hta',null,array('class'=>'form-control'))!!}
        </div>   
        <div class="form-group">
            {!!Form::label('Creditos')!!}
            {!!Form::text('creditos',null,array('class'=>'form-control'))!!}
        </div> 
        <div class="form-group">
            {!!Form::label('Programa')!!}
            {!!Form::text('cod_programa',null,array('class'=>'form-control'))!!}
        </div>                      
        {!!Form::submit('Actualizar',array('class'=>'btn btn-success'))!!}
    {!!Form::close()!!}   
@endsection