<?php

namespace App\Livewire;

use App\Models\Marca;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Marcas extends Component
{
    public $marca_id; 
    public $nombre_marca;
    public $usuario_actual;
    public $marcas;

    public function mount()
    {
        $this->usuario_actual = Auth::user();
    }

    public function render()
    {
        $this->marcas = Marca::get();
        return view('livewire.marcas');
    }

    public function store(){
        $this->validate([
            'nombre_marca' => 'required|max:25',
        ]);

        Marca::create([
            'nombre' => $this->nombre_marca,
        ]);

        $this->resetUI();
    }

    public function update(){
        $this->validate([
            'nombre_marca' => 'required|max:25',
        ]);
        Marca::find($this->marca_id)->update([
            'nombre' => $this->nombre_marca,
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
        $this->reset('marca_id', 'nombre_marca');
    }
}
