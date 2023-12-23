<?php

namespace App\Livewire;

use App\Models\Berita;
use Livewire\Component;

class IndexBerita extends Component
{
    public function render()
    {
        $berita = Berita::take(4)->get();
        return view('livewire.index-berita', compact('berita'));
    }
}
