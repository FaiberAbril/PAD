@extends('template.principal') 
@section('titulo',' Horarios')
@section('contenido','Horarios')
@section('formularios')
    {!!Form::model($horarios, ['route'=>['horarios.update',$horarios->cod_horario], 'method'=>'PUT'])!!}
        <div class="form-group">
            {!!Form::label('Codigo')!!}
            {!!Form::text('codigo_horario',null,array('class'=>'form-control'))!!}
        </div>
        <div class="form-group">
            {!!Form::label('Dia de la Semana')!!}
            {!!Form::text('dia_semana',null,array('class'=>'form-control'))!!}
        </div>
        <div class="form-group">
            {!!Form::label('Estado')!!}
            {!!Form::text('estado',null,array('class'=>'form-control'))!!}
        </div>
        <div class="form-group">
            {!!Form::label('Hora Inicio')!!}
            {!!Form::text('hora_inicio',null,array('class'=>'form-control'))!!}
        </div>
        <div class="form-group">
            {!!Form::label('Hora Fin')!!}
            {!!Form::text('hora_fin',null,array('class'=>'form-control'))!!}
        </div>                
        {!!Form::submit('Actualizar',array('class'=>'btn btn-success'))!!}
    {!!Form::close()!!}
@endsection