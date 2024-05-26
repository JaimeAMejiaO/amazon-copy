<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class VerTodosUsuarios extends Component
{
    public $users;

    public function render()
    {
        $this->users = User::all();
        return view('livewire.ver-todos-usuarios');
    }

    public function eliminarUsuario($id)
    {
        User::destroy($id);
    }
}
