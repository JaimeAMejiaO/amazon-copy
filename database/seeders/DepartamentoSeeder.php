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
            ['id' => 1, 'nombre' => 'Ropa'],
            ['id' => 2, 'nombre' => 'Electrónicos'],
            ['id' => 3, 'nombre' => 'Juguetes'],
        ]);
    }
}
