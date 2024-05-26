<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GarantiaReembolso extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'tipo_peticion',
        'motivo',
        'img',
        'producto_seleccionado',
        'id_usuario',
        'id_pedido',
    ];

    public function user() :BelongsTo
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function pedido() :BelongsTo
    {
        return $this->belongsTo(Pedido::class, 'id_pedido');
    }
}
