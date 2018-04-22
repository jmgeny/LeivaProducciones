<?php

namespace Leivaproducciones;

use Illuminate\Database\Eloquent\Model;

use Leivaproducciones\Categoria;
use Leivaproducciones\Deporte;


class Campeonato extends Model
{
	protected $fillable = [
        'nombre', 'categoria_id', 'deporte_id' , 'fecha_inicio','fecha_fin','avatar'
    ];

    public function categoria()
	{
		$cat = Categoria::find($this->categoria_id); 
		return $cat->nombre;
		// return $this->hasOne('App\Phone', 'foreign_key', 'local_key');
	}

	public function deporte(){
		$dep = Deporte::find($this->deporte_id);
		return $dep->nombre;
	}

}
