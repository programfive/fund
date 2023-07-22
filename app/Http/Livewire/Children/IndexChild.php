<?php

namespace App\Http\Livewire\Children;

use App\Models\Child;
use Livewire\Component;
use Livewire\WithPagination;

class IndexChild extends Component
{

    use WithPagination;
    public $search = '';
    public $open=false;
    public $child;
    protected $queryString = [
        'search' => ['except' => ''],
    ];
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function Show(Child $child){
        $this->open=true;
        $this->child=$child;
    }
 
    public function render()
    {
        $children=Child::where('firstName', 'like', '%'.$this->search.'%')
        ->orWhere('lastName', 'like', '%'.$this->search.'%')
        ->paginate(6);
        return view('livewire.children.index-child',compact('children'));
    }
}