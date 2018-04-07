<?php

namespace Leivaproducciones;

use Illuminate\Database\Eloquent\Model;

class Campeonato extends Model
{
	protected $fillable = [
        'nombre', 'categoria', 'fecha_inicio','fecha_fin',
    ];
}
