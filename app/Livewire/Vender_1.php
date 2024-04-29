<?php

namespace App\Livewire;

use App\Models\DepartamentoCat;
use Livewire\Component;

class Vender_1 extends Component
{
    public $departamentos_cat;
    public function render()
    {   
        $this -> departamentos_cat = DepartamentoCat::all();
        return view('livewire.vender.vender_1');
    }
}
