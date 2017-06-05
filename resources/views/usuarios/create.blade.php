@extends('template.principal') 
@section('titulo','Crear Usuarios')
@section('contenido','Crear Usuarios')
@section('formularios')
 
      
       {!!Form::open(['route'=>'usuarios.store', 'method'=>'POST','class' => 'form'])!!}
       
        <div class="form-group">
            {!!Form::label('Nombre')!!}
            {!! Form::text('nombres', null, array( 'class'=>'form-control'  )) !!}
        </div>
        
        <div class="form-group">
            {!!Form::label('Apellidos')!!}
            {!!Form::text('apellidos',null, array( 'class'=>'form-control'  ) )!!}
        </div> 
          
        <div class="form-group">
            {!!Form::label('Tipo Documento')!!}
            {!!Form::text('tipo_documento',null, array( 'class'=>'form-control'  ) )!!}
        </div >
        <div class="form-group">
            {!!Form::label('Documento')!!}
            {!!Form::text('documento',null , array( 'class'=>'form-control'  ))!!}
        </div>  
        <div>
            {!!Form::label('Celular')!!}
            {!!Form::text('celular',null, array( 'class'=>'form-control'  ))!!}
        </div>
        <div class="form-group">
            {!!Form::label('Correo')!!}
            {!!Form::text('correo',null, array( 'class'=>'form-control'  ))!!}
        </div>   
        <div class="form-group">
            {!!Form::label('Nombre Usuario')!!}
            {!!Form::text('nombreusuario',null, array( 'class'=>'form-control'  ))!!}
        </div>
        
        <div class="form-group">
            {!!Form::label('Clave')!!}
            {!!Form::password('clave',null, array( 'class'=>'form-control' ))!!}
        </div> 
           
        <div class="form-group">
            {!!Form::label('Perfil')!!}
            {!!Form::text('cod_perfil',null, array( 'class'=>'form-control'  ))!!}
        </div>
        <div class="form-group">
            {!!Form::label('Programa')!!}
            {!!Form::text('cod_programa',null, array( 'class'=>'form-control'  ))!!}
        </div>                             
        {!!Form::submit('Crear' , array('class' => 'btn btn-primary'))!!}
    {!!Form::close()!!}     

@endsection


   
   
   
   
   