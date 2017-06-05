@extends('template.principal') 
@section('titulo',' Usuario')
@section('contenido','Editar')
@section('formularios')
   
    {!!Form::model($usuarios, ['route'=>['usuarios.update',$usuarios->cod_usuario], 'method'=>'PUT'])!!}
        <div class="form-group">
            {!!Form::label('Nombre')!!}
            {!!Form::text('nombres',null , array('class'=>'form-control'))!!}
        </div>
        <div class="form-group">
            {!!Form::label('Apellidos')!!}
            {!!Form::text('apellidos',null , array('class'=>'form-control'))!!}
        </div>   
        <div class="form-group">
            {!!Form::label('Tipo Documento')!!}
            {!!Form::text('tipo_documento',null , array('class'=>'form-control'))!!}
        </div>
        <div class="form-group">
            {!!Form::label('Documento')!!}
            {!!Form::text('documento',null , array('class'=>'form-control'))!!}
        </div>  
        <div class="form-group">
            {!!Form::label('Celular')!!}
            {!!Form::text('celular',null , array('class'=>'form-control'))!!}
        </div>
        <div class="form-group">
            {!!Form::label('Correo')!!}
            {!!Form::text('correo',null , array('class'=>'form-control'))!!}
        </div>   
        <div class="form-group">
            {!!Form::label('Nombre Usuario')!!}
            {!!Form::text('nombreusuario',null , array('class'=>'form-control'))!!}
        </div>
        <div class="form-group">
            {!!Form::label('Clave')!!}
            {!!Form::password('clave',null , array('class'=>'form-control'))!!}
        </div>    
        <div class="form-group">
            {!!Form::label('Perfil')!!}
            {!!Form::text('cod_perfil',null , array('class'=>'form-control'))!!}
        </div>
        <div class="form-group">
            {!!Form::label('Programa')!!}
            {!!Form::text('cod_programa',null , array('class'=>'form-control'))!!}
        </div>                             
        {!!Form::submit('Actualizar',array('class'=>'btn btn-success'))!!}
    {!!Form::close()!!}     
@endsection