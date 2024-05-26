<?php

namespace App\Livewire;

use App\Models\ProductoModelo;
use Livewire\Component;

class VerTodosProductos extends Component
{
    public $all_productos;

    public function render()
    {
        $this -> all_productos = ProductoModelo::with('producto.categoria.departamento')->get();

        foreach ($this->all_productos as $producto) {
            $imagenes = explode(',', $producto->img);
            $producto->img = $imagenes[0];
        }

        return view('livewire.ver-todos-productos');
    }

    public function redirect_det($id)
    {
        return redirect()->route('ver-productos', ['id' => $id]);
    }

    public function eliminarProducto($id)
    {
        ProductoModelo::destroy($id);
    }
}
