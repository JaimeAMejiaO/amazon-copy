<?php

namespace App\Livewire;

use App\Models\Direccion;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Direcciones extends Component
{
    public $direccion_id;
    public $nombre_completo;
    public $num_tel;
    public $direccion;
    public $especificacion_dir;
    public $departamento;
    public $ciudad;
    public $barrio;
    public $cod_postal;


    public function render()
    {
        return view('livewire.direcciones.direcciones');
    }

    public function store()
    {
        $this->validate([
            'nombre_completo' => 'required|max:50',
            'num_tel' => 'required|max:30',
            'direccion' => 'required|max:50',
            'especificacion_dir' => 'max:50',
            'departamento' => 'required',
            'ciudad' => 'required',
            'barrio' => 'required',
            'cod_postal' => 'required',
        ]);

        Direccion::create([
            'nombre_completo' => $this->nombre_completo,
            'num_tel' => $this->num_tel,
            'direccion' => $this->direccion,
            'especificacion_dir' => $this->especificacion_dir,
            'departamento' => $this->departamento,
            'ciudad' => $this->ciudad,
            'barrio' => $this->barrio,
            'cod_postal' => $this->cod_postal,
            'id_usuario' => Auth::user()->id,
        ]);

        $this->resetUI();
    }

    public function update(){
        $this->validate([
            'nombre_completo' => 'required|max:50',
            'num_tel' => 'required|max:30',
            'direccion' => 'required|max:50',
            'especificacion_dir' => 'max:50',
            'departamento' => 'required',
            'ciudad' => 'required',
            'barrio' => 'required',
            'cod_postal' => 'required',
        ]);

        Direccion::find($this->direccion_id)->update([
            'nombre_completo' => $this->nombre_completo,
            'num_tel' => $this->num_tel,
            'direccion' => $this->direccion,
            'especificacion_dir' => $this->especificacion_dir,
            'departamento' => $this->departamento,
            'ciudad' => $this->ciudad,
            'barrio' => $this->barrio,
            'cod_postal' => $this->cod_postal,
        ]);

        $this->resetUI();
    
    }

    public function delete($direccion_id)
    {
        Direccion::find($direccion_id)->delete();
        $this->resetUI();
    }

    public function resetUI()
    {
        $this->reset(['direccion_id', 'nombre_completo', 'num_tel', 'direccion', 'especificacion_dir', 'departamento', 'ciudad', 'barrio', 'cod_postal']);
    }
}