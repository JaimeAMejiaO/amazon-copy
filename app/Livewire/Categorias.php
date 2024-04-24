<?php

namespace App\Livewire;

use App\Models\CatProductos;
use App\Models\DepartamentoCat;
use App\Models\CaracteristicaCat;
use Livewire\Component;

class Categorias extends Component
{
    public $id_categoria;
    public $nombre;
    public $array_cat;
    public $caracteristicas;
    public $departamentos_cat;
    public $departamento_seleccionado;

    public function render()
    {
        $this->departamentos_cat = DepartamentoCat::all();
        $this->caracteristicas = CaracteristicaCat::all();
        return view('livewire.categorias.categorias');
    }

    public function store(){
        $this->validate([
            'nombre' => 'required|max:25',
            'array_cat' => 'required',
            'id_depto' => 'required',
        ]);

        CatProductos::create([
            'nombre' => $this->nombre,
            'array_cat' => $this->array_cat,
            'id_depto' => $this->departamentos_cat,
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
