  <div class="form-group">
    {!! Form::label('championship_id', 'Campeonato') !!}
    {!! Form::select('championship_id',\leiman\Championship::orderBy('nombre')->pluck('nombre','id'),null,['class' => 'form-control']) !!}
    <a href="{{ route('championship.create') }}" class="btn btn-primary">Nuevo Campeonato</a>
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
    {!! Form::label('ciudad', 'Ciudad') !!}
    {!! Form::select('city_id',\leiman\City::orderBy('nombre')->pluck('nombre','id')
    ,null,['class' => 'form-control']) !!}

  </div>

  <div class="form-group">
    {!! Form::label('deporte_id', 'Deporte') !!}
    {!! Form::select('sport_id',\leiman\Sport::orderBy('nombre')->pluck('nombre','id')
    ,null,['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('distancia', 'Distancia') !!}
    {!! Form::select('specification_id',\leiman\Specification::orderBy('nombre')->pluck('nombre','id')
    ,null,['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('descripcion', 'Descripción') !!}
    {!! Form::textarea('descripcion', null, ['class'=> 'form-control']) !!}
  </div>    

  <div class="form-group">
    {!! Form::label('cronograma', 'Cronograma') !!}
    {!! Form::textarea('cronograma', null, ['class'=> 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('direccion', 'Direccion del evento') !!}
    {!! Form::text('direccion', null, ['class'=> 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('llegar_dormir', 'Como llegar y donde dormir') !!}
    {!! Form::textarea('llegar_dormir', null, ['class'=> 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('inscripcion', 'link Inscripción') !!}
    {!! Form::text('inscripcion', null, ['class'=> 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('contacto', 'e-mail Contacto') !!}
    {!! Form::text('contacto', null, ['class'=> 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('inscripto', 'Inscriptos') !!}
    {!! Form::file('inscripto') !!}
  </div>

  <div class="form-group">
    {!! Form::label('resultado', 'Resultados') !!}
    {!! Form::file('resultado') !!}
  </div>  
  
  <div class="form-group">
    {!! Form::submit('Enviar',['class' => 'btn btn-primary']) !!}
  </div>    
           
