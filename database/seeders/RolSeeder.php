<?php

namespace Database\Seeders;

use App\Models\RolUsuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rol = new RolUsuario();
        $rol->id = 1;
        $rol->nombre_rol = 'superusuario';
        $rol->save();

        $rol = new RolUsuario();
        $rol->id = 2;
        $rol->nombre_rol = 'comprador';
        $rol->save();
    }
}
