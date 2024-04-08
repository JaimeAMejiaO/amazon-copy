<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DireccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('es_ES');

        for ($i = 1; $i <= 10; $i++) {
            DB::table('direcciones')->insert([
            'id' => $i,
            'nombre_completo' => $faker->name,
            'num_tel' => $faker->phoneNumber,
            'direccion' => $faker->streetAddress,
            'especificacion_dir' => $faker->secondaryAddress,
            'departamento' => $faker->state,
            'ciudad' => $faker->city,
            'barrio' => $faker->streetName,
            'cod_postal' => $faker->postcode,
            'id_usuario' => $faker->numberBetween(1, 6),
            ]);
        }   
    }
}
