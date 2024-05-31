<?php

namespace Tests\Unit;

use App\Livewire\VerTodosProductos;
use App\Models\ProductoModelo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class VerTodosProductosTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_deletes_the_product_with_id_1()
    {

        // Ejecutar el componente Livewire y llamar al método eliminarProducto
        Livewire::test(VerTodosProductos::class)
            ->call('eliminarProducto', 1);

        // Verificar que el producto con id 1 fue eliminado de la base de datos
        $this->assertDatabaseMissing('producto_modelos', ['id' => 1]);
    }
}
