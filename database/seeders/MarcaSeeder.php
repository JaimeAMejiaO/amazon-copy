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
    }
}
