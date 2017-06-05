<html>
    {!!Form::model($programasAcademicos, ['route'=>['programasAcademicos.update',$programasAcademicos->cod_programa], 'method'=>'PUT'])!!}
        <div>
            {!!Form::label('Codigo')!!}
            {!!Form::text('codigo_programa',null)!!}
        </div>
         <div>
            {!!Form::label('Nombre')!!}
            {!!Form::text('nombre_programa',null)!!}
        </div>
        <div>
            {!!Form::label('Facultad')!!}
            {!!Form::text('nombre_facultad',null)!!}
        </div>               
        {!!Form::submit('Actualizar',array('class'=>'btn btn-success'))!!}
    {!!Form::close()!!}
</html>