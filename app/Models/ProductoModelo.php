<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductoModelo extends Model
{
    use HasFactory;

    protected $table = 'producto_modelos';

    protected $fillable = [
        'id',
        'nombre',
        'desc_prod',
        'array_cat',
        'precio',
        'stock',
        'img',
        'id_producto',
    ];

    public function producto(): BelongsTo
    {
        return $this->belongsTo(Producto::class, 'id_producto');
    }

    public function calificacion(): HasMany
    {
        return $this->hasMany(Calificacion::class, 'id_prod_mod');
    }

    public function producto_imagenes(): HasMany
    {
        return $this->hasMany(ProductoImagenes::class, 'id_prod_mod');
    }

    public function carro_compra(): HasMany
    {
        return $this->hasMany(CarroCompra::class, 'id_prod_mod');
    }
}
