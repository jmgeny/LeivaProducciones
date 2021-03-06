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
    {!! Form::select('category_id', \leiman\Category::orderBy('nombre')->pluck('nombre','id') ,null,['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('deporte','Deporte') !!}
    {!! Form::select('sport_id', \leiman\Sport::orderBy('nombre')->pluck('nombre', 'id') ,null,['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('avatar','Imagen') !!}
    {!! Form::file('avatar') !!}
  </div>

  <div class="form-group">
    {!! Form::submit('Enviar',['class' => 'btn btn-primary']) !!}
  </div>    