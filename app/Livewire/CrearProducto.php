<?php

namespace App\Livewire;

use App\Models\CatProductos;
use App\Models\Marca;
use App\Models\Producto;
use App\Models\ProductoModelo;
use Illuminate\Database\Console\DumpCommand;
use Livewire\Component;

class CrearProducto extends Component
{
    public $array_cat;
    public $categorias;
    public $cat_seleccionada = 0;
    public $marcas;
    public $marca_seleccionada = 0;
    public $nombre_modelo;
    public $desc_prod;
    public $precio;
    public $stock;
    public $cat_anterior; //Indicador de cambio de categoria

    public function mount()
    {
        $this->categorias = CatProductos::all();
        $this->marcas = Marca::all();
    }

    public function render()
    {   
        if ($this->cat_seleccionada != $this->cat_anterior) {
            $this->cat_anterior = $this->cat_seleccionada;
            $this->obtener_caracteristicas();
        }
        return view('livewire.crear_producto.crear-producto');
    }

    
    public function obtener_caracteristicas()
    {
        $categoria = CatProductos::find($this->cat_seleccionada);
        $array_cat = explode(', ', $categoria->array_cat);
        
        foreach ($array_cat as $key => $value) {
            $this->array_cat[$key] = ['nombre' => $value, 'valor' => ''];
        }
        //dump($this->array_cat);
    }

    public function store()
    {   
        //dump($this->precio);

        $rules = [
            'cat_seleccionada' => 'required',
            'marca_seleccionada' => 'required',
            'nombre_modelo' => 'required',
            'desc_prod' => 'required',
            'array_cat.*.valor' => 'required',
            'precio' => 'required',
            'stock' => 'required',
        ];

        $messages = [
            'cat_seleccionada.required' => 'La categoría es requerida',
            'marca_seleccionada.required' => 'La marca es requerida',
            'nombre_modelo.required' => 'El nombre del modelo es requerido',
            'desc_prod.required' => 'La descripción del modelo es requerida',
            'array_cat.*.valor.required' => 'Las características del producto son requeridas',
            'precio.required' => 'El precio del producto es requerido',
            'stock.required' => 'El stock del producto es requerido',
        ];

        $this->validate($rules, $messages);

        $caracteristicas_to_array = '';
        foreach ($this->array_cat as $key => $value) {
            if ($caracteristicas_to_array == '')
                $caracteristicas_to_array .= $value['nombre'] . ':' . $value['valor'];
            else
                $caracteristicas_to_array .= '~' . $value['nombre'] . ':' . $value['valor'];
        }

        $producto = Producto::create([
            'id_categoria' => $this->cat_seleccionada,
            'id_marca' => $this->marca_seleccionada,
            'id_usuario' => auth()->user()->id,
        ]);

        ProductoModelo::create([
            'nombre' => $this->nombre_modelo,
            'desc_prod' => $this->desc_prod,
            'array_cat' => $caracteristicas_to_array,
            'precio' => $this->precio,
            'stock' => $this->stock,
            'id_producto' => $producto->id,
        ]);


    }

    public function resetUI()
    {
        $this->cat_seleccionada = 0;
        $this->marca_seleccionada = 0;
        $this->nombre_modelo = '';
        $this->desc_prod = '';
        $this->precio = '';
        $this->stock = '';
        $this->array_cat = [];
    }
}
