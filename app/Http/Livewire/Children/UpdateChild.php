<?php

namespace App\Http\Livewire\Children;

use App\Models\Child;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Helpers\Images;
use Jantinnerezo\LivewireAlert\LivewireAlert;
class UpdateChild extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    public $child;
    public $lastName;
    public $firstName;
    public $dateOfAdmission;
    public $photo;
    public $birthdate;
    protected $rules = [
        'firstName' => 'required',
        'lastName' => 'required',
        'birthdate' => 'required',
        'dateOfAdmission' => 'required'
    ];
    public function mount(Child $child)
    {
        $this->child = $child;
        $this->firstName = $this->child->firstName;
        $this->lastName = $this->child->lastName;
        $this->birthdate = $this->child->birthdate;
        $this->dateOfAdmission = $this->child->dateOfAdmission;
    }
    public function update()
    {
        $this->validate();
        if ($this->photo) {
            $newImageName =Images::generateImageName($this->photo);
            $path="app/public/images/children/";
            $resize=300;
            Images::resizeAndSaveImage($newImageName,$this->photo,$path,$resize);
            $this->child->photo = 'storage/images/children/' . $newImageName;
        }
        $this->child->firstName = $this->firstName;
        $this->child->lastName = $this->lastName;
        $this->child->birthdate = $this->birthdate;
        $this->child->dateOfAdmission = $this->dateOfAdmission;
        $this->child->save();
        $this->reset(['photo', 'firstName', 'birthdate', 'lastName', 'dateOfAdmission']);
        $this->flash('success', '', [
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => true,
            'text' => '¡El registro ha sido actualizado exitosamente !',
        ], '/children/index');
    }
    public function resetImage()
    {
        $this->reset(['photo']);
    }
    public function render()
    {
        return view('livewire.children.update-child');
    }
}