<?php

namespace App\Http\Livewire\Children;

use App\Models\Child;
use Livewire\Component;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Helpers\Images;
class CreateChild extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    public $lastName;
    public $firstName;
    public $dateOfAdmission;
    public $photo;
    public $birthdate;
    protected $rules = [
        'firstName' => 'required',
        'lastName' => 'required',
        'birthdate' => 'required',
        'photo' => 'image|max:1024|mimes:jpg,png',
        'dateOfAdmission' => 'required'
    ];
    public function create()
    {

        $this->validate();
        $newImageName =Images::generateImageName($this->photo);
        $path="app/public/images/children/";
        $resize=300;
        Images::resizeAndSaveImage($newImageName,$this->photo,$path,$resize);
        $this->photo = 'storage/images/children/' . $newImageName;
        Child::create([
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'photo' => $this->photo,
            'birthdate' => $this->birthdate,
            'dateOfAdmission' => $this->dateOfAdmission,
        ]);
        $this->reset(['photo', 'firstName', 'birthdate', 'lastName', 'dateOfAdmission']);
        $this->flash('success', '', [
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => true,
            'text' => '¡El registro ha sido exitosamente completado!',
        ], '/children/index');
    }
    public function resetImage()
    {
        $this->reset(['photo']);
    }
    public function render()
    {
        return view('livewire.children.create-child');
    }
}