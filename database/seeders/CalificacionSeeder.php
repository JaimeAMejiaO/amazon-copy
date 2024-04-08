<?php

namespace Database\Seeders;

use App\Models\Calificacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CalificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $calificacion = new Calificacion();
        $calificacion->id = 1;
        $calificacion->rating_cal = 5;
        $calificacion->comentario = 'Excelente producto';
        $calificacion->id_usuario = 1;
        $calificacion->id_prod_mod = 2;
        $calificacion->save();

        $calificacion = new Calificacion();
        $calificacion->id = 2;
        $calificacion->rating_cal = 4;
        $calificacion->comentario = 'Buena calidad';
        $calificacion->id_usuario = 2;
        $calificacion->id_prod_mod = 2;
        $calificacion->save();
    }
}
