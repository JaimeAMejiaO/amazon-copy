<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MetodoPago extends Model
{
    use HasFactory;

    protected $fillable = [
        'num_tarjeta',
        'nombre_tarjeta',
        'fecha_vencimiento',
        'cvv',
        'id_usuario',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }
}
