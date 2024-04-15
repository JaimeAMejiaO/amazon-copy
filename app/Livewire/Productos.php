<?php

namespace App\Livewire;

use App\Models\Producto;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Productos extends Component
{
    public $producto_id;
    public $nombre;
    public $id_categoria;
    public $id_marca;

    public function render()
    {
        return view('livewire.productos');
    }

    public function store(){
        $this->validate([
            'nombre' => 'required|max:50',
            'id_categoria' => 'required',
            'id_marca' => 'required',
        ]);

        Producto::create([
            'nombre' => $this->nombre,
            'id_categoria' => $this->id_categoria,
            'id_marca' => $this->id_marca,
            'id_usuario' => Auth::user()->id,
        ]);

        $this->resetUI();
    }

    public function update(){
        $this->validate([
            'nombre' => 'required|max:50',
            'id_categoria' => 'required',
            'id_marca' => 'required',
        ]);

        Producto::find($this->producto_id)->update([
            'nombre' => $this->nombre,
            'id_categoria' => $this->id_categoria,
            'id_marca' => $this->id_marca,
        ]);

        $this->resetUI();
    }

    public function delete($producto_id)
    {
        Producto::find($producto_id)->delete();
        $this->resetUI();
    }

    public function resetUI()
    {
        $this->reset(['producto_id', 'nombre', 'id_categoria', 'id_marca']);
    }
}
