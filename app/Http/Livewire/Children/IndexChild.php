<?php

namespace App\Http\Livewire\Children;

use App\Models\Child;
use Livewire\Component;

class IndexChild extends Component
{

    public function render()
    {
        $children=Child::all();
        return view('livewire.children.index-child',compact('children'));
    }
}