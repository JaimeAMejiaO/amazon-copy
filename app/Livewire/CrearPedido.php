<?php

namespace App\Livewire;

use App\Models\CarroCompra;
use App\Models\Direccion;
use App\Models\MetodoPago;
use App\Models\Pedido;
use App\Models\ProductoModelo;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CrearPedido extends Component
{
    public $metodos_pago;
    public $direcciones;
    public $metodo_pago;
    public $direccion;
    public $carro;
    public $carro_usuario;
    public $productos_carro;
    public $total_pedido = 0;

    public function mount()
    {
        $this->metodos_pago = MetodoPago::where('id_usuario', Auth::user()->id)->get();
        $this->direcciones = Direccion::where('id_usuario', Auth::user()->id)->get();
        $this->carro_usuario = CarroCompra::where('id_usuario', Auth::user()->id)->get();
        $this->carro = CarroCompra::where('id_usuario', Auth::user()->id)->get('id_prod_mod');
        $this->productos_carro = ProductoModelo::whereIn('id', $this->carro)->get();
        //dd($this->productos_carro);
    }


    public function render()
    {
        $this->metodo_pago = MetodoPago::where('id_usuario', Auth::user()->id)->first();
        $this->direccion = Direccion::where('id_usuario', Auth::user()->id)->first();
        //dd($this->direccion);
        foreach ($this->carro_usuario as $producto){
            $this->total_pedido += $producto->valor_total;
        }
        //dd($this->total_pedido);
        //dd($this->metodo_pago);
        //dd($this->productos_carro);
        //dd($this->carro_usuario[0]->cant);
        return view('livewire.crear-pedido');
    }

    public function crearPedido(){
        $productos_ids = [];
        foreach ($this->productos_carro as $producto){
            $productos_ids[] = $producto->id;
        }
        $productos_ids = implode(',', $productos_ids);
        //dd($productos_ids);

        Pedido::create([
            'fecha_pedido' => now(),
            'costo_pedido' => $this->total_pedido,
            'success' => 1,
            'id_usuario' => Auth::user()->id,
            'productos' => $productos_ids,
        ]);

        CarroCompra::where('id_usuario', Auth::user()->id)->delete();

        return redirect()->route('principal');
    }
}
