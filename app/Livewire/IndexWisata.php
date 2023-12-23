<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Object_wisata;

class IndexWisata extends Component
{
    public function render()
    {
        $wisata = Object_wisata::all();
        return view('livewire.index-wisata', compact('wisata'));
    }
}
