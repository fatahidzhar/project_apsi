<?php

namespace App\Livewire;

use App\Models\Berita;
use Livewire\Component;

class DataBerita extends Component
{
    public function render()
    {
        $berita = Berita::all();
        return view('livewire.data-berita', compact('berita'));
    }
}
