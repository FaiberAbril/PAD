@extends('template.principal') 
@section('titulo',' Perfil')
@section('contenido','Editar Perfiles')
@section('formularios')

    {!!Form::model($perfil, ['route'=>['perfiles.update',$perfil->cod_perfil], 'method'=>'PUT'])!!}
        <div class="form-group">
            {!!Form::label('Nombre')!!}
            {!!Form::text('nombre_perfil',array('class'=>'form-control') )!!}
        </div>
        {!!Form::submit('Actualizar')!!}
    {!!Form::close()!!}
 
@endsection
    
