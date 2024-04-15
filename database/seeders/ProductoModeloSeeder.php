<?php

namespace Database\Seeders;

use App\Models\ProductoModelo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoModeloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prod_mod = new ProductoModelo();
        $prod_mod->id = 1;
        $prod_mod->nombre = 'iPhone 15 Pro';
        $prod_mod->desc_prod = 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum';
        $prod_mod->array_cat = 'A8, A8, 6GB, 128GB';
        $prod_mod->precio = 6500000;
        $prod_mod->stock = 10;
        $prod_mod->id_producto = 1;
        $prod_mod->save();

        $prod_mod = new ProductoModelo();
        $prod_mod->id = 2;
        $prod_mod->nombre = 'Camisa Oversize Adidas';
        $prod_mod->desc_prod = 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum';
        $prod_mod->array_cat = 'Camisas, Pantalones, Zapatos, Accesorios';
        $prod_mod->precio = 120000;
        $prod_mod->stock = 150;
        $prod_mod->id_producto = 2;
        $prod_mod->save();
    }
}
