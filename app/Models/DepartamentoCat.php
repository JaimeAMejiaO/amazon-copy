<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DepartamentoCat extends Model
{
    use HasFactory;

    protected $table = 'departamento_cats';

    protected $fillable = [
        'id',
        'nombre',
    ];

    public function categorias(): HasMany
    {
        return $this->hasMany(CatProductos::class, 'id_depto');
    }
}
