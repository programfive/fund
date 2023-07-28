<?php

namespace App\Http\Livewire\Jobs;

use App\Models\Child;
use Livewire\Component;
use Livewire\WithPagination;

class IndexJob extends Component
{
    use WithPagination;
    public $search;
    protected $queryString = [
        'search' => ['except' => ''],
    ];
    public function updatingSearch()
    {
        $this->resetPage();
    }
 
    public function createModal(Child $child)
    {
        $this->emit('openModal',$child);
    }

    public function render()
    {
        $children = Child::where('firstName', 'like', '%' . $this->search . '%')
            ->orWhere('lastName', 'like', '%' . $this->search . '%')
            ->paginate(6);
        return view('livewire.jobs.index-job', compact('children'));
    }
}