<?php

namespace App\Livewire;

use App\Models\CarroCompra;
use App\Models\Producto;
use App\Models\ProductoModelo;
use Livewire\Component;

class VerProductos extends Component
{
    public $id_producto;
    public $id_producto_modelo;
    public $modelo_actual;
    public $producto_modelos;
    public $array_cat; //Obtener las caracteristicas de la categoria con su información
    public $explode_array_cat; //Divis 
    public $colores = []; //Obtener los colores de los modelos
    public $tallas = []; //Obtener las tallas de los modelos
    public $cant_seleccionada = 1; //Cantidad seleccionada del producto que se quiere enviar al carro

    public function mount($id)
    {
        //Obtener el producto padre
        //Producto::where('id', $this->id_producto)->first()->id
        //Obtener el modelo producto que se selecciono
        //ProductoModelo::where('id_producto', $this->id_producto)->first();
        $this->id_producto = $id;
        $this->id_producto_modelo = ProductoModelo::find($id);
        $this->producto_modelos = ProductoModelo::with('producto')->where('id_producto', $this->id_producto_modelo->id_producto)->get();
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
        if (CarroCompra::where('id_prod_mod', $this->id_producto_modelo->id)->exists()) {
            $carro = CarroCompra::where('id_prod_mod', $this->id_producto_modelo->id)->first();
            //dd($carro->cant + $this->cant_seleccionada);
            if ($carro->cant + $this->cant_seleccionada > $this->id_producto_modelo->stock) {
                dump('No hay suficiente stock');
            } else {
                $carro->cant = $carro->cant + $this->cant_seleccionada;
                $carro->save();
            }
        } else {
            //dd('AAAAAAAAAAAAAAAAAAAAAAAAAAAA');
            $rules = [
                'cant_seleccionada' => 'required',
            ];
            
            $messages = [
                'cant_seleccionada.required' => 'La cantidad es requerida',
            ];
            
            $this->validate($rules, $messages);
            //dd('entre');

            CarroCompra::create([
                'cant' => $this->cant_seleccionada,
                'id_usuario' => auth()->user()->id,
                'id_prod_mod' => $this->id_producto_modelo->id,
            ]);
        }

    }

    public function redirect_nuevo_modelo()
    {
        redirect()->route('crear-modelo-producto', ['id' => $this->id_producto_modelo->id_producto]);
    }

    public function resetUI()
    {
        $this->reset('cant_seleccionada');
    }
}
