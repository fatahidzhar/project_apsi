<?php

namespace App\Livewire;

use App\Models\Member;
use Livewire\Component;

class DataMember extends Component
{
    public function render()
    {
        $member = Member::all();
        return view('livewire.data-member', compact('member'));
    }
}
