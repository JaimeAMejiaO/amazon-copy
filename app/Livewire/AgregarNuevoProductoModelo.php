<?php

namespace App\Livewire;

use App\Models\ProductoModelo;
use Livewire\Component;

class AgregarNuevoProductoModelo extends Component
{
    public $nombre_nuevo_modelo;
    public $desc_nuevo_modelo;
    public $precio_nuevo_modelo;
    public $stock_nuevo_modelo;
    
    public function render()
    {
        return view('livewire.agregar-nuevo-producto-modelo');
    }

    public function store()
    {
        $rules = [
            'nombre_nuevo_modelo' => 'required',
            'desc_nuevo_modelo' => 'required',
            'precio_nuevo_modelo' => 'required',
            'stock_nuevo_modelo' => 'required',
        ];

        $messages = [
            'nombre_nuevo_modelo.required' => 'El campo nombre es requerido',
            'desc_nuevo_modelo.required' => 'El campo descripción es requerido',
            'precio_nuevo_modelo.required' => 'El campo precio es requerido',
            'stock_nuevo_modelo.required' => 'El campo stock es requerido',
        ];

        $this->validate($rules, $messages);

        ProductoModelo::create([
            'nombre' => $this->nombre_nuevo_modelo,
            'desc_prod' => $this->desc_nuevo_modelo,
            'precio' => $this->precio_nuevo_modelo,
            'stock' => $this->stock_nuevo_modelo,
            'id_producto' => $this->id_producto,
        ]);
    }
}
