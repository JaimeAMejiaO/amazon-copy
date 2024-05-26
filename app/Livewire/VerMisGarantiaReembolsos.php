<?php

namespace App\Livewire;

use App\Models\GarantiaReembolso;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class VerMisGarantiaReembolsos extends Component
{
    public $garantias_reembolsos;

    public function render()
    {
        $this->garantias_reembolsos = GarantiaReembolso::where('id_usuario', Auth::user()->id)->get();    
        return view('livewire.ver-mis-garantia-reembolsos');
    }
}
