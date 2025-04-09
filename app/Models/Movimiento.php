<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Movimiento extends Model
{
    //
    
    protected $fillable = [
        'id_usuario',
        'id_herramienta',
        'cantidad_herramientas',
        'tipo_movimiento',
    ];

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }
}
