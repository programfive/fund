<?php

namespace App\Http\Livewire\Jobs\Partials;

use App\Models\Child;
use Livewire\Component;

class AssignWork extends Component
{
    public $open=false;
    public $child;
    protected $listeners = ['openModal'];

    public function openModal(Child $child){
        $this->open=true;
        $this->child=$child;
    }

    public function render()
    {
        return view('livewire.jobs.partials.assign-work');
    }
}