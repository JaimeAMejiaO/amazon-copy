<?php

namespace App\Livewire;

use App\Models\Marca;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Marcas extends Component
{
    use LivewireAlert;
    
    public $marca_id; 
    public $nombre_marca;
    public $usuario_actual;
    public $marcas;

    public function mount()
    {
        $this->usuario_actual = Auth::user();
        $this->marcas = Marca::get();
    }

    public function render()
    {
        return view('livewire.marcas');
    }

    public function store(){
        $this->validate([
            'nombre_marca' => 'required|max:25',
        ]);

        Marca::create([
            'nombre' => $this->nombre_marca,
        ]);
        $this->marcas = Marca::get();

        $this->alert('success', 'Marca agregada!');

        $this->resetUI();
    }

    public function boton_editar($marca_id)
    {        
        $marca = $this->marcas->where('id', $marca_id)->first();
        $this->nombre_marca = $marca->nombre;
        $marca->editar = 1;
    }

    public function update($marca_id){
        $this->validate([
            'nombre_marca' => 'required|max:25',
        ]);
        Marca::find($marca_id)->update([
            'nombre' => $this->nombre_marca,
        ]);
        $this->dispatch('Cualquiermensaje');
        $this->marcas = Marca::get();

        $this->alert('success', 'Marca actualizada!');

        $this->resetUI();
    }

    public function cancelar_editar()
    {
        $this->marcas = Marca::get();
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
