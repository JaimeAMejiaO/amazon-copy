<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\MetodoPago;
use Illuminate\Support\Facades\Auth;

class MetodoPagos extends Component
{
    public $metodo_pago_id;
    public $num_tarjeta;
    public $nombre_tarjeta;
    public $fecha_vencimiento;
    public $cvv;
    public $usuario_actual;
    public $metodos_pago;
    public $anio_actual;
    public $mes_actual;
    public $titulo_modal;
    public $tipo_modal;

    public function mount()
    {
        $this->usuario_actual = Auth::user();
    }

    public function render()
    {
        $this->anio_actual = intval(date('Y'));
        $this->metodos_pago = MetodoPago::where('id_usuario', $this->usuario_actual->id)->get();
        return view('livewire.metodo_pagos.metodo-pagos');
    }

    public function abrir_modal_metodo($metodo_pago_id, $opc)
    {
        if ($opc == 1) {
            $this->titulo_modal = 'Editar método de pago';
            $this->tipo_modal = "edit";
            $this->metodo_pago_id = $metodo_pago_id;
            $metodo_pago = MetodoPago::find($metodo_pago_id);
            $this->num_tarjeta = $metodo_pago->num_tarjeta;
            $this->nombre_tarjeta = $metodo_pago->nombre_tarjeta;
            $this->fecha_vencimiento = $metodo_pago->fecha_vencimiento;
            $this->cvv = $metodo_pago->cvv;
        } elseif ($opc == 2) {
            $this->titulo_modal = 'Agregar método de pago';
            $this->tipo_modal = "store";
        }
        $this->dispatch('abrir_modal_metodo');
    }

    public function store()
    {

        $this->fecha_vencimiento = $this->anio_actual . '-' . $this->mes_actual . '-01';

        $rules = [
            'num_tarjeta' => 'required|max:16',
            'nombre_tarjeta' => 'required',
            'fecha_vencimiento' => 'required|after_or_equal:today',
            'cvv' => 'required',
        ];
        $messages = [
            'num_tarjeta.required' => 'El campo número de tarjeta es obligatorio.',
            'num_tarjeta.max' => 'El campo número de tarjeta no puede ser mayor a 16 numeros.',
            'nombre_tarjeta.required' => 'El campo nombre de tarjeta es obligatorio.',
            'fecha_vencimiento.required' => 'El campo fecha de vencimiento es obligatorio.',
            'fecha_vencimiento.after_or_equal' => 'La fecha de vencimiento no puede ser mayor a la fecha actual.',
            'cvv.required' => 'El campo cvv es obligatorio.',
        ];
        $this->validate($rules, $messages);

        MetodoPago::create([
            'num_tarjeta' => $this->num_tarjeta,
            'nombre_tarjeta' => $this->nombre_tarjeta,
            'fecha_vencimiento' => $this->fecha_vencimiento,
            'cvv' => $this->cvv,
            'id_usuario' => Auth::user()->id,
        ]);
        $this->dispatch('cerrar_modal_metodo');
        $this->resetUI();
    }

    public function update()
    {
        $this->fecha_vencimiento = $this->anio_actual . '-' . $this->mes_actual . '-01';

        $this->validate([
            'num_tarjeta' => 'required',
            'nombre_tarjeta' => 'required',
            'fecha_vencimiento' => 'required|after_or_equal:today',
            'cvv' => 'required',
        ]);

        MetodoPago::find($this->metodo_pago_id)->update([
            'num_tarjeta' => $this->num_tarjeta,
            'nombre_tarjeta' => $this->nombre_tarjeta,
            'fecha_vencimiento' => $this->fecha_vencimiento,
            'cvv' => $this->cvv,
        ]);

        $this->dispatch('cerrar_modal_metodo');
        $this->resetUI();
    }

    public function delete($metodoPagoId)
    {
        MetodoPago::find($metodoPagoId)->delete();
        $this->resetUI();
    }

    public function resetUI()
    {
        $this->reset(['metodo_pago_id', 'num_tarjeta', 'nombre_tarjeta', 'fecha_vencimiento', 'cvv']);
    }
}
