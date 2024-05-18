<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pedido extends Model
{
    use HasFactory;

    protected $table = 'pedidos';

    protected $fillable = [
        'id',
        'fecha_pedido',
        'costo_pedido',
        'success',
        'id_usuario',
        'productos',
    ];

    public function user() :BelongsTo
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

}
