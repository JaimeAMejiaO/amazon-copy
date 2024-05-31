<?php

namespace Tests\Unit;

use App\Livewire\Direcciones;
use PHPUnit\Framework\TestCase;

class DireccionesTest extends TestCase
{
    /**
     * Prueba del método resetUI
     *
     * Esta prueba verifica que el método resetUI de la clase Direcciones
     * restablece los atributos del componente a sus valores predeterminados.
     *
     * @return void
     */
    public function testResetUI()
    {
        // Configuración: se crea una instancia de la clase Direcciones
        $component = new Direcciones();

        // Asignar valores a los atributos para simular el estado modificado
        $component->direccion_id = 1;
        $component->nombre_completo = 'Juan Perez';
        $component->num_tel = '123456789';
        $component->direccion = 'Calle 123';
        $component->especificacion_dir = 'Apto 101';
        $component->departamento_seleccionado = 'Bogotá';
        $component->municipio_seleccionado = 'Bogotá';
        $component->barrio = 'Chapinero';
        $component->cod_postal = '110111';
        $component->titulo_modal = 'Editar dirección';
        $component->tipo_modal = 'edit';

        // Ejecución: se llama al método resetUI
        $component->resetUI();

        // Aserción: se verifica que todos los atributos se hayan restablecido a null o valores predeterminados
        $this->assertNull($component->direccion_id);
        $this->assertNull($component->nombre_completo);
        $this->assertNull($component->num_tel);
        $this->assertNull($component->direccion);
        $this->assertNull($component->especificacion_dir);
        $this->assertEquals('Antioquia', $component->departamento_seleccionado); // Valor predeterminado
        $this->assertEquals('Medellín', $component->municipio_seleccionado); // Valor predeterminado
        $this->assertNull($component->barrio);
        $this->assertNull($component->cod_postal);
        $this->assertNull($component->titulo_modal);
        $this->assertNull($component->tipo_modal);
    }
}
