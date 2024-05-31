<?php

namespace Tests\Unit;

use App\Livewire\Categorias;
use App\Models\CatProductos;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class CategoriasTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_deletes_category_with_id_1_correctly()
    {
        // Crear una categoría de ejemplo con ID 1 en la base de datos
        CatProductos::factory()->create(['id' => 1]);

        Livewire::test(Categorias::class)
            ->call('delete', 1) // Llamar al método delete con el ID 1
            ->assertEmitted('cerrar_modal_categoria') // Verificar que se emite el evento 'cerrar_modal_categoria'
            ->assertDispatchedBrowserEvent('swal', ['title' => 'Categoría eliminada correctamente']); // Verificar que se muestra el mensaje de éxito
    }
}
