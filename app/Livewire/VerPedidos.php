<?php

namespace App\Livewire;

use App\Models\Pedido;
use App\Models\ProductoModelo;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class VerPedidos extends Component
{
    public $pedidos;
    public $productos;

    public function render()
    {
        $this->pedidos = Pedido::where('id_usuario', Auth::user()->id)->get();
        //dd($this->pedidos);
        //$this->productos = $this->pedidos[0]->productos;
        //dd($this->productos);

        foreach ($this->pedidos as $pedido) {
            $productos_ids = explode(',', $pedido->productos);
            $pedido->productos = ProductoModelo::whereIn('id', $productos_ids)->get();
        }

        return view('livewire.ver-pedidos');
    }
}
