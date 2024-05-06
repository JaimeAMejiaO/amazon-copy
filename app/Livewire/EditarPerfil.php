<?php

namespace App\Livewire;

use Livewire\Component;

class EditarPerfil extends Component
{
    public $usuario;
    public $name;
    public $apell;
    public $email;
    public $celular;
    public $fecha_nac;

    public function mount()
    {
        $this->usuario = auth()->user();
        //dd($this->usuario);
        $this->name = $this->usuario->name;
        $this->apell = $this->usuario->apell;
        $this->email = $this->usuario->email;
        $this->celular = $this->usuario->celular;
        $this->fecha_nac = $this->usuario->fecha_nac;
    }

    public function render()
    {
        return view('livewire.editar_perfil');
    }

    public function update()
    {
        $rules = [
            'name' => 'required',
            'apell' => 'required',
            'email' => 'required|email',
            'celular' => 'required',
            'fecha_nac' => 'required',
        ];

        $messages = [
            'name.required' => 'El campo nombre es requerido',
            'apell.required' => 'El campo apellido es requerido',
            'email.required' => 'El campo email es requerido',
            'email.email' => 'El campo email debe ser un email valido',
            'celular.required' => 'El campo celular es requerido',
            'fecha_nac.required' => 'El campo fecha de nacimiento es requerido',
        ];

        $this->validate($rules, $messages);

        $this->usuario->update([
            'name' => $this->name,
            'apell' => $this->apell,
            'email' => $this->email,
            'celular' => $this->celular,
            'fecha_nac' => $this->fecha_nac,
        ]);

        $this->resetUI();
    }

    public function resetUI()
    {
        return redirect()->route('editar_perfil');
    }
}
