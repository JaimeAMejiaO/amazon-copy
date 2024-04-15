<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GarantiaReembolsoRespuesta extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'respuesta',
        'sustentacion',
        'monto',
        'id_usuario',
        'id_gar_reem',
    ];

    public function user() :BelongsTo
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function garantia_reembolso() :BelongsTo
    {
        return $this->belongsTo(GarantiaReembolso::class, 'id_gar_reem');
    }
}
