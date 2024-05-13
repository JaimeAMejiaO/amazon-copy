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
            ['id' => 2, 'nombre' => 'RAM', 'caso_especial' => 4],
            ['id' => 3, 'nombre' => 'Almacenamiento', 'caso_especial' => 3],
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
            ['id' => 17, 'nombre'=> 'Color', 'caso_especial' => 2],
            ['id' => 18, 'nombre'=> 'Material', 'caso_especial' => 0],
            ['id' => 19, 'nombre'=> 'Modelo', 'caso_especial' => 0],
            ['id' => 20, 'nombre'=> 'Resolucion', 'caso_especial' => 0],
            ['id' => 21, 'nombre'=> 'Accesorios incluidos', 'caso_especial' => 0],
            ['id' => 22, 'nombre'=> 'Tipo lente', 'caso_especial' => 0],
            ['id' => 23, 'nombre'=> 'Tipo de pantalla', 'caso_especial' => 0],
            ['id' => 24, 'nombre'=> 'Tipo de memoria', 'caso_especial' => 0],
            ['id' => 25, 'nombre'=> 'Microfono', 'caso_especial' => 0],
            ['id' => 26, 'nombre'=> 'Nucleos procesador', 'caso_especial' => 0],
            ['id' => 27, 'nombre'=> 'Hilos procesador', 'caso_especial' => 0],
            ['id' => 28, 'nombre'=> 'Tipo teclado', 'caso_especial' => 0],
            ['id' => 29, 'nombre'=> 'Bluetooth', 'caso_especial' => 0],
            ['id' => 30, 'nombre'=> 'WiFi', 'caso_especial' => 0],
            ['id' => 31, 'nombre'=> 'USB', 'caso_especial' => 0],
            ['id' => 32, 'nombre'=> 'HDMI', 'caso_especial' => 0],
            ['id' => 33, 'nombre'=> 'VGA', 'caso_especial' => 0],
            ['id' => 34, 'nombre'=> 'RJ45', 'caso_especial' => 0],
            ['id' => 35, 'nombre'=> 'Jack 3.5mm', 'caso_especial' => 0],
            ['id' => 36, 'nombre'=> 'Tipo de batería', 'caso_especial' => 0],
            ['id' => 37, 'nombre'=> 'Capacidad batería', 'caso_especial' => 0],
            ['id' => 38, 'nombre'=> 'Tiempo de carga', 'caso_especial' => 0],
            ['id' => 39, 'nombre'=> 'Tiempo de uso', 'caso_especial' => 0],
            ['id' => 40, 'nombre'=> 'Tiempo de espera', 'caso_especial' => 0],
            ['id' => 41, 'nombre'=> 'Resolución cámara', 'caso_especial' => 0],
            ['id' => 42, 'nombre'=> 'Apertura cámara', 'caso_especial' => 0],
            ['id' => 43, 'nombre'=> 'Tipo de audio', 'caso_especial' => 0],
            ['id' => 44, 'nombre'=> 'Potencia de audio', 'caso_especial' => 0],
            ['id' => 45, 'nombre'=> 'Tipo de sensor', 'caso_especial' => 0],
            ['id' => 46, 'nombre'=> 'Resolución sensor', 'caso_especial' => 0],
            ['id' => 47, 'nombre'=> 'Frecuencia', 'caso_especial' => 0],
            ['id' => 48, 'nombre'=> 'Tipo de memoria RAM', 'caso_especial' => 0],
            ['id' => 49, 'nombre'=> 'Tipo de almacenamiento', 'caso_especial' => 0],
            ['id' => 50, 'nombre'=> 'Capacidad de almacenamiento', 'caso_especial' => 0],
            ['id' => 51, 'nombre'=> 'Tipo de pantalla', 'caso_especial' => 0],
            ['id' => 52, 'nombre'=> 'Resolución de pantalla', 'caso_especial' => 0],
            ['id' => 53, 'nombre'=> 'Tasa de refresco', 'caso_especial' => 0],
            ['id' => 54, 'nombre'=> 'Tipo de tarjeta gráfica', 'caso_especial' => 0],
            ['id' => 55, 'nombre'=> 'Capacidad de tarjeta gráfica', 'caso_especial' => 0],
            ['id' => 56, 'nombre'=> 'Tipo de conexión', 'caso_especial' => 0],
            ['id' => 57, 'nombre'=> 'Velocidad de conexión', 'caso_especial' => 0],
        ]);
    }
}
