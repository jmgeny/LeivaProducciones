  <div class="form-group">
    {!! Form::label('campeonato','Campeonato') !!}
    {!! Form::select('campeonato_id',\Leivaproducciones\Campeonato::orderBy('nombre')->pluck('nombre','id'),null,['class' => 'form-control']) !!}
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
    {!! Form::select('ciudad_id',\Leivaproducciones\Ciudade::orderBy('name')->pluck('name','id')
    ,null,['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('deporte','Deporte') !!}
    {!! Form::select('deporte_id',\Leivaproducciones\Deporte::orderBy('nombre')->pluck('nombre', 'id'),null,['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('distancia','Distancia') !!}
    {!! Form::select('distancia_id',\Leivaproducciones\Distancia::orderBy('id')->pluck('nombre', 'id'),null,['class' => 'form-control']) !!}
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