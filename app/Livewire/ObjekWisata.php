<?php

namespace App\Livewire;

use App\Models\Object_wisata;
use Livewire\Component;

class ObjekWisata extends Component
{

    public function render()
    {
        $wisata = Object_wisata::all();
        return view('livewire.objek-wisata', compact('wisata'));
    }
}
