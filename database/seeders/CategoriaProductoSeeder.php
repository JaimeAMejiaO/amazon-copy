<?php

namespace Database\Seeders;

use App\Models\CatProductos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cat = new CatProductos();
        $cat->id = 1;
        $cat->nombre = 'Ropa';
        $cat->array_cat = 'Camisas, Pantalones, Zapatos, Accesorios';
        $cat->id_depto = 1;
        $cat->save();

        $cat = new CatProductos();
        $cat->id = 2;
        $cat->nombre = 'Electrónicos';
        $cat->array_cat = 'CPU, GPU, RAM, Almacenamiento';
        $cat->id_depto = 2;
        $cat->save();

        $cat = new CatProductos();
        $cat->id = 3;
        $cat->nombre = 'Juguetes';
        $cat->array_cat = 'Material, Dimensiones, Edad recomendada, Modelo';
        $cat->id_depto = 3;
        $cat->save();
    }
}
