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
        $rol->nombre_rol = 'SuperUsuario';
        $rol->save();

        $rol = new RolUsuario();
        $rol->id = 2;
        $rol->nombre_rol = 'Comprador';
        $rol->save();

        $rol = new RolUsuario();
        $rol->id = 3;
        $rol->nombre_rol = 'Vendedor';
        $rol->save();
    }
}
