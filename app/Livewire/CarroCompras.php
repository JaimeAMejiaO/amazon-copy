<?php

namespace App\Livewire;

use App\Models\CarroCompra;
use App\Models\Producto;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;


class CarroCompras extends Component
{
    use LivewireAlert;

    public $cant_productos;
    public $array_productos;
    public $cant_seleccionada;
    public $valor_total = 0;

    public $caracteristicas_productos = [];

    public function render()
    {
        if (auth()->user() == null) {
            $this->array_productos = [];
        }else{
            $this->array_productos = CarroCompra::with('producto_modelo')->where('id_usuario', auth()->user()->id)->get(); //Trae una coleccion todos los productos que agrego el usuario a su carro
        }
        $this->valor_total = 0;
        
        foreach ($this->array_productos as $producto) {
            $this->valor_total += $producto->valor_total;
            $array_cat = explode('~', $producto->caracteristicas);
            $caracteristicas = [];
            foreach ($array_cat as $cat) {
                //Dividir el elemento en key y value usando ":"
                list($key, $value) = explode(':', $cat);
                //Agregar el par clave-valor al nuevo array
                $caracteristicas[trim($key)] = trim($value);
            }
            $this->caracteristicas_productos[$producto->id]=$caracteristicas;

            $imagenes = explode(',', $producto->producto_modelo->img);
            $producto->producto_modelo->img = $imagenes[0];
        }
        return view('livewire.carro_compras.carro-compras');
    }

    public function aumentarCantidad($id_producto)
    {
        $producto = CarroCompra::find($id_producto);
        $producto->cant = $producto->cant + 1;
        $producto->valor_total = $producto->cant * $producto->producto_modelo->precio;
        $producto->save();
    }

    public function disminuirCantidad($id_producto)
    {
        $producto = CarroCompra::find($id_producto);
        $producto->cant = $producto->cant - 1;
        $producto->valor_total = $producto->cant * $producto->producto_modelo->precio;
        $producto->save();
    }

    public function delete($id_producto)
    {
        CarroCompra::find($id_producto)->delete();
    }

    public function hacer_pedido()
    {
        $this->flash('success', 'Procediste a hacer el pedido', [], 'crear_pedido');
    }
}
