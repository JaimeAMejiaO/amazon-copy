<?php

namespace App\Livewire;

use App\Models\CarroCompra;
use App\Models\Producto;
use Livewire\Component;

class CarroCompras extends Component
{
    public $cant_productos;
    public $array_productos;
    public $cant_seleccionada;
    public $precio_total = 0;

    public function render()
    {
        $this->array_productos = CarroCompra::with('producto_modelo')->get(); //Trae una coleccion todos los productos que agrego el usuario a su carro
        $this->cant_seleccionada;
        

        //dd($this->array_productos[0]->producto_modelo[0]->nombre);

        return view('livewire.carro_compras.carro-compras');
    }

    public function delete($id_producto)
    {
        CarroCompra::find($id_producto)->delete();
    }


}
