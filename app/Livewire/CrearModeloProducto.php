<?php

namespace App\Livewire;

use App\Models\CatProductos;
use App\Models\Producto;
use App\Models\ProductoImagenes;
use App\Models\ProductoModelo;
use Livewire\Component;
use Livewire\WithFileUploads;

class CrearModeloProducto extends Component
{
    use WithFileUploads;

    public $array_cat;
    public $nombre_modelo;
    public $cat_raiz;
    public $cat_deffer;
    public $desc_prod;
    public $precio;
    public $stock;
    public $producto_principal;
    public $images = [];
    
    public function mount($id)
    {
        $this->producto_principal = Producto::where('id', $id)->first();
        //
    }

    public function render()
    {
        $this->cat_raiz = $this->producto_principal->id_categoria;
        if ($this->cat_raiz != $this->cat_deffer) {
            $this->cat_deffer = $this->cat_raiz;
            $this->obtener_caracteristicas();
        }        
        return view('livewire.crear-modelo-producto');
    }
    
    public function obtener_caracteristicas()
    {
        $categoria = CatProductos::where('id', $this->cat_raiz)->first();
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
            'nombre_modelo' => 'required',
            'desc_prod' => 'required',
            'array_cat.*.valor' => 'required',
            'precio' => 'required',
            'stock' => 'required',
        ];

        $messages = [
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

        $fileNames = [];
        foreach ($this->images as $image) {
            $image->storeAs('public/img', $image->getClientOriginalName());
            $fileNames[] = $image->getClientOriginalName();
        }

        $images = implode(',', $fileNames);

        $producto = ProductoModelo::create([
            'nombre' => $this->nombre_modelo,
            'desc_prod' => $this->desc_prod,
            'array_cat' => $caracteristicas_to_array,
            'precio' => $this->precio,
            'stock' => $this->stock,
            'img' => $images,
            'id_producto' => $this->producto_principal->id,
        ]);

        //dd($producto);

        redirect()->route('ver-productos', ['id' => $producto->id]);
    }
}
