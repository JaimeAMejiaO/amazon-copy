<?php

namespace App\Livewire;

use App\Models\GarantiaReembolso;
use App\Models\Pedido;
use App\Models\ProductoModelo;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;


class GarantiaReembolsos extends Component
{
    use WithFileUploads;
    use LivewireAlert;

    public $tipo_peticion;
    public $motivo;
    public $img;
    public $pedido;
    public $traer_productos;
    public $mostrar_producto;
    public $producto_seleccionado;

    public function mount($id)
    {
        $this->pedido = Pedido::where('id', $id)->first();
        $this->traer_productos = explode(',', $this->pedido->productos);
        $this->mostrar_producto = ProductoModelo::whereIn('id', $this->traer_productos)->get();
    }

    public function render()
    {
        return view('livewire.garantia-reembolsos');
    }
    
    public function realizarPeticion()
    {
        $rules=[
            'tipo_peticion' => 'required',
            'motivo' => 'required',
            'img' => 'required',
            'producto_seleccionado' => 'required',
        ];

        $messages = [
            'tipo_peticion.required' => 'El campo tipo de petición es requerido',
            'motivo.required' => 'El campo motivo es requerido',
            'img.required' => 'El campo imagen es requerido',
            'producto_seleccionado.required' => 'Debe seleccionar un producto para proceder con la garantía o reembolso',
        ];

        $this->validate($rules, $messages);

        $referencia = 'Ref' . date('Y-m-d') . '-' . $this->pedido->id . '-' . $this->producto_seleccionado;
        
        $nombreImagen = $this->img->getClientOriginalName();
        $this->img->storeAs('/', $nombreImagen, 'public');

        GarantiaReembolso::create([
            'referencia' => $referencia,
            'tipo_peticion' => $this->tipo_peticion,
            'motivo' => $this->motivo,
            'img' => $nombreImagen,
            'producto_seleccionado' => $this->producto_seleccionado,
            'id_usuario' => auth()->id(),
            'id_pedido' => $this->pedido->id,
        ]);

        $this->resetUI();

        $this->flash('success', 'Haz realizado una peticion correctamente!', [], 'ver-pedidos');

    }

    public function resetUI()
    {
        $this->tipo_peticion = '';
        $this->motivo = '';
        $this->img = '';
        $this->producto_seleccionado = '';
    }
}
