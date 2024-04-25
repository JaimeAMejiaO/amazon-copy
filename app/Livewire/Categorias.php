<?php

namespace App\Livewire;

use App\Models\CatProductos;
use App\Models\DepartamentoCat;
use App\Models\CaracteristicaCat;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Categorias extends Component
{
    use WithPagination;

    public $id_categoria;
    public $caracteristica_iniciales;
    public $nombre_cat;
    public $array_cat; //Variable para almacenar las caracteristicas seleccionadas
    public $departamentos_cat; //Llamado de todos los departamentos que hay en la base de datos
    public $departamento_seleccionado; //Variable para almacenar el departamento seleccionado
    public $search;
    public $magia_negra = []; //Variable para cambiar un atributo de valor 
    public $categorias; //Llama todas las categorias que hay en la base de datos
    public $titulo_modal;
    public $tipo_modal;

    public function mount()
    {
        $this->caracteristica_iniciales = CaracteristicaCat::orderBy('nombre')->get();
        foreach ($this->caracteristica_iniciales as $caracteristica) {
            $this->magia_negra[$caracteristica->id] = false;
        }

    }

    public function render()
    {
        $strSearch = $this->search == '' ? false : '%' . str_replace(' ', '%', $this->search) . '%';
        $this->departamentos_cat = DepartamentoCat::all();
        $this->categorias = CatProductos::all();
        $caracteristicas = CaracteristicaCat::when($strSearch, function ($query, $strSearch) {
            return $query->where(
                function ($query) use ($strSearch) {
                    $query->where('nombre', 'like', $strSearch);
                }
            );
        })->orderBy('nombre')->paginate(10);

        $this->setPage(1);

        return view('livewire.categorias.categorias', [
            'caracteristicas' => $caracteristicas,
        ]);
    }

    public function seleccionarCaracteristica($id_caracteristica)
    {   
        $this->magia_negra[$id_caracteristica] = !$this->magia_negra[$id_caracteristica];
        //dump($this->magia_negra);
    }

    public function abrir_modal_categoria($id_categoria, $opc)
    {
        if ($opc == 1) {
            $this->titulo_modal = 'Editar categoria';
            $this->tipo_modal = "edit";
            $this->id_categoria = $id_categoria;
            $categoria = CatProductos::find($id_categoria);
            $this->nombre_cat = $categoria->nombre;
            $this->array_cat = $categoria->array_cat;
            $array_cat = explode(', ', $this->array_cat);
            foreach ($this->caracteristica_iniciales as $caracteristica) {
                if (in_array($caracteristica->nombre, $array_cat)) {
                    $this->magia_negra[$caracteristica->id] = true;
                }
            }
            $this->departamento_seleccionado = $categoria->id_depto;
        } elseif ($opc == 2) {
            $this->titulo_modal = 'Agregar categoria';
            $this->tipo_modal = "store";
        }

        $this->dispatch('abrir_modal_categoria');
    }

    public function store()
    {
        foreach ($this->magia_negra as $key => $value) {
            if ($value) {
                $cat = $this->caracteristica_iniciales->where('id', $key)->first()->nombre;
                if ($this->array_cat == '') {
                    $this->array_cat.=$cat;
                } else
                    $this->array_cat.=', '.$cat;
            }
        }

        $this->validate([
            'nombre_cat' => 'required|max:25',
            'array_cat' => 'required',
            'departamento_seleccionado' => 'not_in:0',
        ]);

        CatProductos::create([
            'nombre' => $this->nombre_cat,
            'array_cat' => $this->array_cat,
            'id_depto' => $this->departamento_seleccionado,
        ]);

        $this->dispatch('cerrar_modal_categoria');
        $this->resetUI();

    }

    public function update()
    {   
        $this->array_cat = '';
        foreach ($this->magia_negra as $key => $value) {
            if ($value) {
                $cat = $this->caracteristica_iniciales->where('id', $key)->first()->nombre;
                if ($this->array_cat == '') {
                    $this->array_cat.=$cat;
                } else
                    $this->array_cat.=', '.$cat;
            }
        }

        $this->validate([
            'nombre_cat' => 'required|max:25',
            'array_cat' => 'required',
            'departamento_seleccionado' => 'not_in:0',
        ]);

        CatProductos::find($this->id_categoria)->update([
            'nombre' => $this->nombre_cat,
            'array_cat' => $this->array_cat,
            'id_depto' => $this->departamento_seleccionado,
        ]);

        $this->dispatch('cerrar_modal_categoria');
        $this->resetUI();
    }

    public function delete($id_cat)
    {
        CatProductos::find($id_cat)->delete();
        $this->resetUI();
    }

    public function resetUI()
    {
        foreach ($this->caracteristica_iniciales as $caracteristica) {
            $this->magia_negra[$caracteristica->id] = false;
        }
        $this->reset(['nombre_cat', 'array_cat', 'id_categoria', 'departamento_seleccionado']);  
    }
}
