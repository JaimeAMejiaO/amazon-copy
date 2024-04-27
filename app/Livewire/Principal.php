<?php

namespace App\Livewire;

use App\Models\DepartamentoCat;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Principal extends Component
{
    
    public $usuario;
    public $departamentos_cat;

    public function mount()
    {
        $this-> usuario = Auth::user();
    }

    public function render()
    {
        $this -> departamentos_cat = DepartamentoCat::all();
        return view('livewire.principal');

    }
}
