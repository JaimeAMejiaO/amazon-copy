<?php

namespace Tests\Unit;

use App\Http\Controllers\Auth\RegisterController;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class RegisterControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_creates_a_new_user()
    {
        // Instancia el controlador
        $controller = new RegisterController();

        // Datos del nuevo usuario
        $data = [
            'name' => 'John Doe',
            'apell' => 'Doe',
            'email' => 'john.doe@example.com',
            'password' => 'password',
        ];

        // Usa Reflection para acceder al método protegido
        $reflectionMethod = new \ReflectionMethod(RegisterController::class, 'create');
        $reflectionMethod->setAccessible(true);

        // Llama al método create usando Reflection
        $user = $reflectionMethod->invoke($controller, $data);

        // Verifica que se crea una instancia del modelo User
        $this->assertInstanceOf(User::class, $user);

        // Verifica que los datos del usuario sean correctos
        $this->assertEquals('John Doe', $user->name);
        $this->assertEquals('Doe', $user->apell);
        $this->assertEquals('john.doe@example.com', $user->email);
        $this->assertTrue(Hash::check('password', $user->password));

        // Verifica que el usuario se haya creado en la base de datos
        $this->assertDatabaseHas('users', [
            'name' => 'John Doe',
            'apell' => 'Doe',
            'email' => 'john.doe@example.com',
        ]);
    }
}
