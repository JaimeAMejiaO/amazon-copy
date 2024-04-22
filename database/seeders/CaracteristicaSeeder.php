<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CaracteristicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('caracteristica_cats')->insert([
            ['id' => 1, 'nombre' => 'CPU', 'caso_especial' => 0],
            ['id' => 2, 'nombre' => 'RAM', 'caso_especial' => 0],
            ['id' => 3, 'nombre' => 'Almacenamiento', 'caso_especial' => 0],
            ['id' => 4, 'nombre' => 'Pantalla', 'caso_especial' => 0],
            ['id' => 5, 'nombre' => 'Tarjeta gráfica', 'caso_especial' => 0],
            ['id' => 6, 'nombre' => 'Sistema operativo', 'caso_especial' => 0],
            ['id' => 7, 'nombre' => 'Puertos', 'caso_especial' => 0],
            ['id' => 8, 'nombre' => 'Conectividad', 'caso_especial' => 0],
            ['id' => 9, 'nombre' => 'Batería', 'caso_especial' => 0],
            ['id' => 10, 'nombre'=> 'Dimensiones', 'caso_especial' => 0],
            ['id' => 11, 'nombre'=> 'Peso', 'caso_especial' => 0],
            ['id' => 12, 'nombre'=> 'Cámara', 'caso_especial' => 0],
            ['id' => 13, 'nombre'=> 'Audio', 'caso_especial' => 0],
            ['id' => 14, 'nombre'=> 'Sensores', 'caso_especial' => 0],
            ['id' => 15, 'nombre'=> 'Otros', 'caso_especial' => 0],
            ['id' => 16, 'nombre'=> 'Talla', 'caso_especial' => 1],
        ]);
    }
}
