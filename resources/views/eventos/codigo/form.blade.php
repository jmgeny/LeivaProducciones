  <div class="form-group">
    {!! Form::label('campeonato','Campeonato') !!}
    {!! Form::select('campeonato_id',['1' => '', '2' => 'Triatlon Serie', '3' => 'Duatlon Serie'],null,['class' => 'form-control']) !!}
  </div>

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
    {!! Form::label('deporte','Deporte') !!}
    {!! Form::select('deporte_id',['1' => 'Triatlon', '2' => 'Duatlon', '3' => 'Corrida'],null,['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('especialidad','Especialidad') !!}
    {!! Form::select('especialidad_id',['1' => 'Campeonato Regional', '2' => 'Campeonato Nacional', '3' => 'Copa Mundo'],null,['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('cronograma','Cronograma') !!}
    {!! Form::textarea('cronograma',null,['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('descripcion','Descripción') !!}
    {!! Form::textarea('descripcion',null,['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('llegar_dormir','Como llegar y donde dormir') !!}
    {!! Form::textarea('llegar_dormir',null,['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('contacto','Contacto') !!}
    {!! Form::textarea('contacto',null,['class' => 'form-control']) !!}
  </div>

{{--   <div class="form-group">
    {!! Form::label('avatar','Imagen') !!}
    {!! Form::file('avatar') !!}
  </div> --}}

  <div class="form-group">
    {!! Form::label('inscripcion', 'Inscripción') !!}
    {!! Form::text('inscripcion', null, ['class'=> 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('inscripto', 'Lisa de Inscriptos') !!}
    {!! Form::text('inscripto', null, ['class'=> 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('resultado', 'Resultado del Evento') !!}
    {!! Form::text('resultado', null, ['class'=> 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::submit('Enviar',['class' => 'btn btn-primary']) !!}
  </div>    