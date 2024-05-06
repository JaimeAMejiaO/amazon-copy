<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = 'Jaime Andres';
        $user->apell = 'Mejia Osorio';
        $user->email = 'jandri20001@gmail.com';
        $user->password = bcrypt('Contrasena123');
        $user->save();

        $user1 = new User();
        $user1->name = 'Julian Stevan';
        $user1->apell = 'Daza Tobon';
        $user1->email = 'julian.daza@utp.edu.co';
        $user1->password = bcrypt('Contrasena123');
        $user1->save();

        $user2 = new User();
        $user2->name = 'Juan Manuel';
        $user2->apell = 'Ruiz';
        $user2->email = 'juanmanuel.ruiz1@utp.edu.co';
        $user2->password = bcrypt('Contrasena123');
        $user2->save();

        $user3 = new User();
        $user3->name = 'Alexander';
        $user3->apell = 'Bejarano Gonzalez';
        $user3->email = 'albegonz@utp.edu.co';
        $user3->password = bcrypt('Contrasena123');
        $user3->save();

        $user4 = new User();
        $user4->name = 'Santiago';
        $user4->apell = 'Potes';
        $user4->email = 's.potes@utp.edu.co';
        $user4->password = bcrypt('Contrasena123');
        $user4->save();
    }
}
