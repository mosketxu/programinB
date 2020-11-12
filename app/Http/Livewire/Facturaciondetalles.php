<?php

namespace App\Http\Livewire;

use App\FacturacionDetalle;



use Livewire\Component;

class Facturaciondetalles extends Component
{
    public FacturacionDetalle $facturaciondetalle;

    public function mount($facturaciondetalle)
    {

        $this->facturaciondetalle=$facturaciondetalle;
    }

    public function render()
    {
        return view('livewire.facturaciondetalles');
    }
}
