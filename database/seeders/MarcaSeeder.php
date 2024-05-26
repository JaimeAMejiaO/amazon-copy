<?php

namespace Database\Seeders;

use App\Models\Marca;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $marca = new Marca();
        $marca->id = 1;
        $marca->nombre = 'Adidas';
        $marca->save();

        $marca = new Marca();
        $marca->id = 2;
        $marca->nombre = 'Nike';
        $marca->save();

        $marca = new Marca();
        $marca->id = 3;
        $marca->nombre = 'Puma';
        $marca->save();

        $marca = new Marca();
        $marca->id = 4;
        $marca->nombre = 'HP';
        $marca->save();

        $marca = new Marca();
        $marca->id = 5;
        $marca->nombre = 'Acer';
        $marca->save();

        $marca = new Marca();
        $marca->id = 6;
        $marca->nombre = 'Alienware';
        $marca->save();

        $marca = new Marca();
        $marca->id = 7;
        $marca->nombre = 'Asus';
        $marca->save();

        $marca = new Marca();
        $marca->id = 8;
        $marca->nombre = 'Lenovo';
        $marca->save();

        $marca = new Marca();
        $marca->id = 9;
        $marca->nombre = 'Dell';
        $marca->save();

        $marca = new Marca();
        $marca->id = 10;
        $marca->nombre = 'Sony';
        $marca->save();

        $marca = new Marca();
        $marca->id = 11;
        $marca->nombre = 'Samsung';
        $marca->save();

        $marca = new Marca();
        $marca->id = 12;
        $marca->nombre = 'LG';
        $marca->save();

        $marca = new Marca();
        $marca->id = 13;
        $marca->nombre = 'Apple';
        $marca->save();

        $marca = new Marca();
        $marca->id = 14;
        $marca->nombre = 'Xiaomi';
        $marca->save();

        $marca = new Marca();
        $marca->id = 15;
        $marca->nombre = 'Huawei';
        $marca->save();

        $marca = new Marca();
        $marca->id = 16;
        $marca->nombre = 'Motorola';
        $marca->save();
        
    }
}
