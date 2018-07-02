<?php

namespace leiman;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'nombre', 'fecha', 'direccion', 'city_id','descripcion','campeonato_id','sport_id','specification_id','cronograma','llegar_dormir','contacto','inscripcion', 'inscripto','resultado',
    ];
}
