<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CarroCompra extends Model
{
    use HasFactory;

    protected $table = 'carro_compras';

    protected $fillable = [
        'id',
        'cant',
        'valor_total',
        'id_usuario',
        'id_prod_mod',
        'caracteristicas'
    ];

    public function user() :BelongsTo
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function producto_modelo() :BelongsTo
    {
        return $this->belongsTo(ProductoModelo::class, 'id_prod_mod');
    }
}
