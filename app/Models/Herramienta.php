<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Herramienta extends Model
{
    //

    protected $fillable = [
        'nombre',
        'cantidad_total',
        'cantidad_en_casillero',
    ];
    
}
