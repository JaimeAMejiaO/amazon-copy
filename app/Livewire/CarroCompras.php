<?php

namespace App\Livewire;

use App\Models\CarroCompra;
use Livewire\Component;

class CarroCompras extends Component
{
    public $cant_productos;
    public $array_productos;

    public function render()
    {
        $this->array_productos = CarroCompra::where('id_usuario', auth()->user()->id)->get('id_prod_mod');

        $repeated_products = $this->array_productos->groupBy('id_prod_mod')->filter(function ($group) {
            return $group->count() > 1;
        });

        $unique_products = $this->array_productos->groupBy('id_prod_mod')->filter(function ($group) {
            return $group->count() === 1;
        });

        $repeated_products->each(function ($group) {
            $total_quantity = $group->sum('cantidad');
            $first_product = $group->first();
            $first_product->cantidad += $total_quantity - $first_product->cantidad;
        });

        $this->array_productos = $repeated_products->concat($unique_products)->flatten();

        return view('livewire.carro_compras.carro-compras');
    }


}
