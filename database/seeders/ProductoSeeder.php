<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $producto = new Producto();
        $producto->id = 1;
        $producto->nombre = 'iPhone';
        $producto->id_categoria = 2;
        $producto->id_marca = 5;
        $producto->id_usuario = 1;
        $producto->save();

        $producto = new Producto();
        $producto->id = 2;
        $producto->nombre = 'Camisa Oversize';
        $producto->id_categoria = 1;
        $producto->id_marca = 1 ;
        $producto->id_usuario = 1;
        $producto->save();
    }
}
