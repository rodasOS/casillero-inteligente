<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //

    public $fillable = [
        'id',
        'nombre',
    ];

    protected $hidden = 'contrasena';
}
