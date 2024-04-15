<?php

namespace App\Livewire;

use App\Models\Marca;
use Livewire\Component;

class Marcas extends Component
{
    public $marca_id; 
    public $nombre;

    public function render()
    {
        return view('livewire.marcas');
    }

    public function store(){
        $this->validate([
            'nombre' => 'required|max:25',
        ]);
        Marca::create([
            'nombre' => $this->nombre,
        ]);

        $this->resetUI();
    }

    public function update(){
        $this->validate([
            'nombre' => 'required|max:25',
        ]);
        Marca::find($this->marca_id)->update([
            'nombre' => $this->nombre,
        ]);

        $this->resetUI();
    }

    public function delete($marca_id)
    {
        Marca::find($marca_id)->delete();
        $this->resetUI();
    }

    public function resetUI()
    {
        $this->reset(['marca_id', 'nombre']);
    }
}
