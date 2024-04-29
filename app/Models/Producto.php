<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'id_categoria',
        'id_marca',
        'id_usuario',
    ];

    public function categoria(): BelongsTo
    {
        return $this->belongsTo(CatProductos::class, 'id_categoria');
    }

    public function marca(): BelongsTo
    {
        return $this->belongsTo(Marca::class, 'id_marca');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function producto_modelo(): HasMany
    {
        return $this->hasMany(ProductoModelo::class, 'id_producto');
    }
}
