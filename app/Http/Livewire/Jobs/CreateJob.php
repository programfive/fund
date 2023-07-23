<?php

namespace App\Http\Livewire\Jobs;

use App\Models\Job;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
class CreateJob extends Component
{
    use LivewireAlert;
    public $open=false;
    public $name;
    public $hour;
    public $description;
    protected $rules = [
        'name' => 'required|min:6',
        'hour' => 'required',
        'description'=>'required|min:8'
    ];
 

    public function create(){
      $this->validate();
      Job::create(
        [
            'name'=>$this->name,
            'hour'=>$this->hour,
            'description'=>$this->description
        ]
        );
        $this->reset(['open','name','hour','description']);
        $this->alert('success', '', [
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => true,
            'text' => '¡Se ha creado el trabajo correctamente.!',
        ]);
        
    }
    public function render()
    {
        return view('livewire.jobs.create-job');
    }
}