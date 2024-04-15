<?php

namespace Database\Seeders;

use App\Models\CarroCompra;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarroCompraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $carro_compra = new CarroCompra();
        $carro_compra->id = 1;
        $carro_compra->cant = 1;
        $carro_compra->id_usuario = 1;
        $carro_compra->id_prod_mod = 1;
        $carro_compra->save();

        $carro_compra = new CarroCompra();
        $carro_compra->id = 2;
        $carro_compra->cant = 2;
        $carro_compra->id_usuario = 1;
        $carro_compra->id_prod_mod = 2;
        $carro_compra->save();
    }
}
