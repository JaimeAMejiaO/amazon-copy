<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'fecha_pedido',
        'costo_pedido',
        'id_usuario',
        'id_carro',
    ];

    public function user() :BelongsTo
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function carro_compra() :BelongsTo
    {
        return $this->belongsTo(CarroCompra::class, 'id_carro');
    }
}
