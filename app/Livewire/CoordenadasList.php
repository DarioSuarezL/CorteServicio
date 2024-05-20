<?php

namespace App\Livewire;

use App\Models\Coordenada;
use Livewire\Component;

class CoordenadasList extends Component
{
    public function render()
    {
        $coords = Coordenada::paginate(10);
        return view('livewire.coordenadas-list', compact('coords'));
    }
}
