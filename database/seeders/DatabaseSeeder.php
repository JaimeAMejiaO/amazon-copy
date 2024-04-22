<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\CaracteristicaCat;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this -> call(UserSeeder::class);
        $this -> call(DireccionSeeder::class);
        $this -> call(MetodoPagoSeeder::class);
        $this -> call(MarcaSeeder::class);
        $this -> call(DepartamentoSeeder::class);
        $this -> call(CaracteristicaSeeder::class);
        $this -> call(CategoriaProductoSeeder::class);
        $this -> call(ProductoSeeder::class);
        $this -> call(ProductoModeloSeeder::class);
        $this -> call(CalificacionSeeder::class);
        $this -> call(CarroCompraSeeder::class);

        
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
