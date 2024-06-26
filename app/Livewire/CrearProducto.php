<?php

namespace App\Livewire;

use App\Models\CatProductos;
use App\Models\DepartamentoCat;
use App\Models\Marca;
use App\Models\Producto;
use App\Models\ProductoImagenes;
use App\Models\ProductoModelo;
use Illuminate\Database\Console\DumpCommand;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class CrearProducto extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    
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
    public $images = [];

    public function mount()
    {
        $this->categorias = CatProductos::with('departamento')->get();
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
            'images.*' => 'required|image',
        ];

        $messages = [
            'cat_seleccionada.required' => 'La categoría es requerida',
            'marca_seleccionada.required' => 'La marca es requerida',
            'nombre_modelo.required' => 'El nombre del modelo es requerido',
            'desc_prod.required' => 'La descripción del modelo es requerida',
            'array_cat.*.valor.required' => 'Las características del producto son requeridas',
            'precio.required' => 'El precio del producto es requerido',
            'stock.required' => 'El stock del producto es requerido',
            'images.*.required' => 'La imagen del producto es requerida',
            'images.*.image' => 'El archivo debe ser una imagen',
        ];

        $this->validate($rules, $messages);

        $caracteristicas_to_array = '';
        foreach ($this->array_cat as $key => $value) {
            if ($caracteristicas_to_array == '')
                $caracteristicas_to_array .= $value['nombre'] . ':' . $value['valor'];
            else
                $caracteristicas_to_array .= '~' . $value['nombre'] . ':' . $value['valor'];
        }

        $fileNames = [];
        foreach ($this->images as $image) {
            $image->storeAs('/', $image->getClientOriginalName(), 'public');
            $fileNames[] = $image->getClientOriginalName();
        }

        $images = implode(',', $fileNames);

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
            'img' => $images,
            'id_producto' => $producto->id,
        ]);

        $id_last_prod = ProductoModelo::latest('id')->first()->id;


        $this->flash('success', 'Creaste un nuevo producto correctamente', [], 'ver-productos/'. $id_last_prod);
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
