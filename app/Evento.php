<?php

namespace Leivaproducciones;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $fillable = [
        'nombre', 'fecha', 'direccion', 'ciudad_id','descripcion','campeonato_id','deporte_list','especialidad_id','cronograma','llegar_dormir','contacto','inscripcion', 'avatar','inscripto','resultado',
    ];
	
}
