<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\MetodoPago;
use Illuminate\Support\Facades\Auth;

class MetodoPagos extends Component
{
    public $num_tarjeta;
    public $nombre_tarjeta;
    public $fecha_vencimiento;
    public $cvv;
    public $usuario_actual;
    public $metodos_pago;

    public function mount()
    {
        $this-> usuario_actual = Auth::user();
    }

    public function render()
    {
        $this-> metodos_pago = MetodoPago::where('id_usuario', $this->usuario_actual->id)->get();
        return view('livewire.metodo_pagos.metodo-pagos');
    }

    public function store()
    {
        $this->validate([
            'num_tarjeta' => 'required',
            'nombre_tarjeta' => 'required',
            'fecha_vencimiento' => 'required|before_or_equal:today',
            'cvv' => 'required',
        ]);

        MetodoPago::create([
            'num_tarjeta' => $this->num_tarjeta,
            'nombre_tarjeta' => $this->nombre_tarjeta,
            'fecha_vencimiento' => $this->fecha_vencimiento,
            'cvv' => $this->cvv,
            'id_usuario' => Auth::user()->id,
        ]);

        $this->resetUI();
    }

    public function resetUI()
    {
        $this->reset(['num_tarjeta', 'nombre_tarjeta', 'fecha_vencimiento', 'cvv']);
    }
    
}
