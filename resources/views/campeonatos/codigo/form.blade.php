  <div class="form-group">
    {!! Form::label('nombre', 'Nombre del Evento') !!}
    {!! Form::text('nombre', null, ['class'=> 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('fecha_inicio', 'Fecha de Inicio') !!}
    {!! Form::date('fecha_inicio', null, ['class'=> 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('fecha_fin', 'Fecha de Fin') !!}
    {!! Form::date('fecha_fin', null, ['class'=> 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('categoria','Categoria') !!}
    {!! Form::select('categoria_id',['1' => 'Campeonato Regional', '2' => 'Campeonato Nacional', '3' => 'Copa Mundo'],null,['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('deporte','Deporte') !!}
    {!! Form::select('deporte_id',['1' => 'Triatlon', '2' => 'Duatlon', '3' => 'Corrida'],null,['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('avatar','Imagen') !!}
    {!! Form::file('avatar') !!}
  </div>

  <div class="form-group">
    {!! Form::submit('Enviar',['class' => 'btn btn-primary']) !!}
  </div>    