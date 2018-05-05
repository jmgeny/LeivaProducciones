<?php

namespace Leivaproducciones;

use Illuminate\Database\Eloquent\Model;

// use Leivaproducciones\Categoria;
// use Leivaproducciones\Deporte;


class Campeonato extends Model
{
	protected $fillable = [
        'nombre', 'categoria_id', 'deporte_id' , 'fecha_inicio','fecha_fin','avatar'
    ];

    public function categoria() {
    	
		return $this->belongsTo(Categoria::class);
	}

	public function deporte() {
		
		return $this->belongsTo(Deporte::class);
	}

}
