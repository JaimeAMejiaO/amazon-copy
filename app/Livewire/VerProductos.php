<?php

namespace App\Livewire;

use App\Models\Producto;
use App\Models\ProductoModelo;
use Livewire\Component;

class VerProductos extends Component
{
    public $id_producto;
    public $modelo_actual;
    public $nombre_nuevo_modelo;
    public $desc_nuevo_modelo;
    public $precio_nuevo_modelo;
    public $stock_nuevo_modelo;
    public $producto_modelos;
    public $array_cat; //Obtener las caracteristicas de la categoria con su información
    public $explode_array_cat; //Divis 
    public $colores = []; //Obtener los colores de los modelos
    public $tallas = []; //Obtener las tallas de los modelos

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
        dd($this->colores, $this->tallas);
    }

    public function render()
    {

        return view('livewire.ver-productos.ver-productos');
    }

    public function store()
    {
        $rules = [
            'nombre_nuevo_modelo' => 'required',
            'desc_nuevo_modelo' => 'required',
            'precio_nuevo_modelo' => 'required',
            'stock_nuevo_modelo' => 'required',
        ];

        $messages = [
            'nombre_nuevo_modelo.required' => 'El campo nombre es requerido',
            'desc_nuevo_modelo.required' => 'El campo descripción es requerido',
            'precio_nuevo_modelo.required' => 'El campo precio es requerido',
            'stock_nuevo_modelo.required' => 'El campo stock es requerido',
        ];

        $this->validate($rules, $messages);

        ProductoModelo::create([
            'nombre' => $this->nombre_nuevo_modelo,
            'desc_prod' => $this->desc_nuevo_modelo,
            'precio' => $this->precio_nuevo_modelo,
            'stock' => $this->stock_nuevo_modelo,
            'id_producto' => $this->id_producto,
        ]);
    }
}
