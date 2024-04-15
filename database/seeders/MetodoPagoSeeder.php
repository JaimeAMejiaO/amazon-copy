<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class MetodoPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 10; $i++) {
            DB::table('metodo_pagos')->insert([
                'id' => $i,
                'num_tarjeta' => $faker->creditCardNumber,
                'nombre_tarjeta' => $faker->name,
                'fecha_vencimiento' => $faker->creditCardExpirationDate,
                'cvv' => $faker->randomNumber(3),
                'id_usuario' => $faker->numberBetween(1, 6),
            ]);
        }
    }
}
