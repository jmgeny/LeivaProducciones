  <div class="form-group">
    {!! Form::label('nombre', 'Nombre del Evento') !!}
    {!! Form::text('nombre', null, ['class'=> 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('fecha', 'Fecha') !!}
    {!! Form::date('fecha', null, ['class'=> 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('direccion', 'Dirección') !!}
    {!! Form::text('direccion', null, ['class'=> 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('ciudad','Ciudad') !!}
    {!! Form::select('ciudad_id',['1' => 'Bragado', '2' => 'Chascomus', '3' => 'Buenos Aires'],null,['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('descripcion','Descripción') !!}
    {!! Form::textarea('descripcion',null,['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('avatar','Imagen') !!}
    {!! Form::file('avatar') !!}
  </div>

  <div class="form-group">
    {!! Form::submit('Enviar',['class' => 'btn btn-primary']) !!}
  </div>    