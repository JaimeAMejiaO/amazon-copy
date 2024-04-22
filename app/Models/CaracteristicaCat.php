<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaracteristicaCat extends Model
{
    use HasFactory;

    protected $table = 'caracteristica_cats';

    protected $fillable = [
        'id',
        'nombre',
        'caso_especial',
    ];
}
