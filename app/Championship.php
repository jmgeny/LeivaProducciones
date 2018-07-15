<?php

namespace leiman;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Championship extends Model
{
    	protected $fillable = [
        'nombre', 'category_id', 'sport_id' , 'fecha_inicio','fecha_fin','avatar'
    ];
}
