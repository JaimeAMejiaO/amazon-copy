<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CatProductos extends Model
{
    use HasFactory;

    protected $table = 'cat_productos';
    
    protected $fillable = [
        'id',
        'nombre',
        'array_cat',
    ];

    public function productos(): HasMany
    {
        return $this->hasMany(Producto::class, 'id_categoria');
    }
}
