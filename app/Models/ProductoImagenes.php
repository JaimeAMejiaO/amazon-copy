<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductoImagenes extends Model
{
    use HasFactory;

    protected $fillale = [
        'id',
        'img_principal',
        'img',
        'id_prod_mod',
    ];

    public function producto_modelo(): BelongsTo
    {
        return $this->belongsTo(ProductoModelo::class, 'id_prod_mod');
    }
}
