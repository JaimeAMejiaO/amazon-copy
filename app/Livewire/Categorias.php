<?php

namespace App\Livewire;

use App\Models\CatProductos;
use Livewire\Component;

class Categorias extends Component
{
    public $id_categoria;
    public $nombre;
    public $array_cat;

    public function render()
    {
        return view('livewire.categorias.categorias');
    }

    public function store(){
        $this->validate([
            'nombre' => 'required|max:25',
            'array_cat' => 'required',
        ]);

        CatProductos::create([
            'nombre' => $this->nombre,
            'array_cat' => $this->array_cat,
        ]);

        $this->resetUI();
    }

    public function update(){
        $this->validate([
            'nombre' => 'required|max:25',
            'array_cat' => 'required',
        ]);

        CatProductos::find($this->id_categoria)->update([
            'nombre' => $this->nombre,
            'array_cat' => $this->array_cat,
        ]);
        $this->resetUI();
    }

    public function delete($id_cat)
    {
        CatProductos::find($id_cat)->delete();
        $this->resetUI();
    }

    public function resetUI()
    {
        $this->reset(['nombre', 'array_cat', 'id_categoria']);
    }
}
