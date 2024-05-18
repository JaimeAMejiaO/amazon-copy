<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Pregunta extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'pregunta',
        'id_usuario',
        'id_prod_mod',
    ];

    public function user() :BelongsTo
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function producto_modelo() :BelongsTo
    {
        return $this->belongsTo(ProductoModelo::class, 'id_prod_mod');
    }

    public function respuesta(): HasOne
    {
        return $this->hasOne(Respuesta::class, 'id_pregunta');
    }
}
