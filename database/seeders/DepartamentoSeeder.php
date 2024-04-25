<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('departamento_cats')->insert([
            ['id' => 1, 'nombre' => 'Electrónicos'],
            ['id' => 2, 'nombre' => 'Computadoras'],
            ['id' => 3, 'nombre' => 'Smart Home'],
            ['id' => 4, 'nombre' => 'Arte y artesanías'],
            ['id' => 5, 'nombre' => 'Automotriz'],
            ['id' => 6, 'nombre' => 'Bebé'],
            ['id' => 7, 'nombre' => 'Belleza y cuidado personal'],
            ['id' => 8, 'nombre' => 'Moda para mujer'],
            ['id' => 9, 'nombre' => 'Moda para hombre'],
            ['id' => 10, 'nombre' => 'Moda para niña'],
            ['id' => 11, 'nombre' => 'Moda para niño'],
            ['id' => 12, 'nombre' => 'Salyd y hogar'],
            ['id' => 13, 'nombre' => 'Hogar y cocina'],
            ['id' => 14, 'nombre' => 'Industrial y científico'],
            ['id' => 15, 'nombre' => 'Equipaje'],
            ['id' => 16, 'nombre' => 'Películas y televisión'],
            ['id' => 17, 'nombre' => 'Insumos para mascostas'],
            ['id' => 18, 'nombre' => 'Software'],
            ['id' => 19, 'nombre' => 'Deportes'],
            ['id' => 20, 'nombre' => 'Herramientas y mejoramiento del hogar'],
            ['id' => 21, 'nombre' => 'Juguetes y juegos'],
            ['id' => 22, 'nombre' => 'Videojuegos'],
            ['id' => 23, 'nombre' => 'Relojes'],
            ['id' => 24, 'nombre' => 'Otros'],
        ]);
    }
}
