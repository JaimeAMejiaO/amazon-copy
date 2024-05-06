<?php

namespace App\Livewire;

use App\Models\DepartamentoCat;
use App\Models\ProductoModelo;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Principal extends Component
{
    
    public $usuario;
    public $departamentos_cat;
    public $all_productos;
    public $dpto_seleccionado;

    public function mount()
    {
        $this-> usuario = Auth::user();
    }

    public function render()
    {
        $this -> departamentos_cat = DepartamentoCat::all();
        $dpto = $this->dpto_seleccionado;
        $this -> all_productos = ProductoModelo::with('producto.categoria.departamento')->when($dpto, function ($query, $dpto){
            return $query->whereHas('producto.categoria.departamento', function ($query) use ($dpto){
                $query->where('id', $dpto);
            });
        })->get();

        //dd($this->all_productos);
        return view('livewire.principal');
    }

    public function actualizar_vista_productos($id)
    {
        $this->dpto_seleccionado = $id;
    }

    public function redirect_det($id)
    {
        return redirect()->route('ver-productos', ['id' => $id]);
    }

}
