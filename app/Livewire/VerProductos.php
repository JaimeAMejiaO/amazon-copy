<?php

namespace App\Livewire;

use App\Models\CarroCompra;
use App\Models\Producto;
use App\Models\ProductoModelo;
use Livewire\Component;

class VerProductos extends Component
{
    public $id_producto;
    public $modelo_actual;
    public $producto_modelos;
    public $array_cat; //Obtener las caracteristicas de la categoria con su información
    public $explode_array_cat; //Divis 
    public $colores = []; //Obtener los colores de los modelos
    public $tallas = []; //Obtener las tallas de los modelos
    public $cant_seleccionada; //Cantidad seleccionada del producto que se quiere enviar al carro

    public function mount()
    {
        //Obtener el producto padre
        //Producto::where('id', $this->id_producto)->first()->id
        //Obtener el modelo producto que se selecciono
        //ProductoModelo::where('id_producto', $this->id_producto)->first();
        $this->id_producto = 5;
        $this->producto_modelos = ProductoModelo::with('producto')->where('id_producto', $this->id_producto)->get();
        $this->modelo_actual = $this->producto_modelos->first();
        $this->array_cat = explode('~', $this->modelo_actual->array_cat);
        $this->explode_array_cat = array();
        //dd($this->modelo_actual->producto->categoria->nombre);

        foreach ($this->array_cat as $cat) {
            //Dividir el elemento en key y value usando ":"
            list($key, $value) = explode(':', $cat);
            //Agregar el par clave-valor al nuevo array
            $this->explode_array_cat[trim($key)] = trim($value);
        }

        //Obtener los colores de los modelos
        if (isset($this->explode_array_cat['Color'])) {
            $producto_modelos = $this->producto_modelos->where('id', '!=', $this->modelo_actual->id);
            foreach ($producto_modelos as $modelo) {
                $array_cat = explode('~', $modelo->array_cat);
                $explode_array_cat = array();
                foreach ($array_cat as $cat) {
                    list($key, $value) = explode(':', $cat);
                    $explode_array_cat[trim($key)] = trim($value);
                }
                $this->colores[] = $explode_array_cat['Color'];
            }
        }

        //Obtener las tallas de los modelos
        if (isset($this->explode_array_cat['Talla'])) {
            $producto_modelos = $this->producto_modelos->where('id', '!=', $this->modelo_actual->id);
            foreach ($producto_modelos as $modelo) {
                $array_cat = explode('~', $modelo->array_cat);
                $explode_array_cat = array();
                foreach ($array_cat as $cat) {
                    list($key, $value) = explode(':', $cat);
                    $explode_array_cat[trim($key)] = trim($value);
                }
                $this->tallas[] = $explode_array_cat['Talla'];
            }
        }
        //dd($this->modelo_actual->stock);
    }

    public function render()
    {

        return view('livewire.ver-productos.ver-productos');
    }

    public function send_to_cart()
    {
        //dd($this->cant_seleccionada);
        
        $rules = [
            'cant_seleccionada' => 'required',
        ];

        $messages = [
            'cant_seleccionada.required' => 'La cantidad es requerida',
        ];

        $this->validate($rules, $messages);

        CarroCompra::create([
            'cant' => $this->cant_seleccionada,
            'id_usuario' => auth()->user()->id,
            'id_prod_mod' => $this->modelo_actual->id,
        ]);
    }

    public function resetUI()
    {
        $this->reset('cant_seleccionada');
    }
}
