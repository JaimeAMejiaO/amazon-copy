<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Direccion extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nombre_completo',
        'num_tel',
        'direccion',
        'especificacion_dir',
        'departamento',
        'ciudad',
        'barrio',
        'cod_postal',
        'id_usuario',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }
}
