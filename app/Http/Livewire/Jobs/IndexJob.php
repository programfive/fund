<?php

namespace App\Http\Livewire\Jobs;

use App\Models\Child;
use Livewire\Component;

class IndexJob extends Component
{
    
    public function render()
    {
        $children=Child::all();
        return view('livewire.jobs.index-job',compact('children'));
    }
}