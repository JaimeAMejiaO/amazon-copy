<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Principal extends Component
{
    
    public $usuario;

    public function mount()
    {
        $this-> usuario = Auth::user();
    }

    public function render()
    {
        return view('livewire.principal');

    }
}
