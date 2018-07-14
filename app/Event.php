<?php

namespace leiman;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Event extends Model
{
    protected $fillable = [
        'nombre', 'fecha', 'direccion', 'city_id','descripcion','campeonato_id','sport_id','specification_id','cronograma','llegar_dormir','contacto','inscripcion', 'inscripto','resultado',
    ];

    public function sport() {
    	return $this->belongsTo(Sport::class);
    }

    public function championship() {
    	return $this->belongsTo(Championship::class);
    }

    public function city() {
    	return $this->belongsTo(City::class);
    }

    public function specification() {
    	return $this->belongsTo(Specification::class);
    }

}
