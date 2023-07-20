<?php

namespace App\Http\Livewire\Children;

use App\Models\Child;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;
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
            $newImageName = time() . '_' . $this->photo->getClientOriginalName();
            $img = Image::make($this->photo->getRealPath());
            $img->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save(public_path('storage/images/children/' . $newImageName));
            $this->child->photo = 'storage/images/children/' . $newImageName;
        }
        $this->child->firstName = $this->firstName;
        $this->child->lastName = $this->lastName;
        $this->child->birthdate = $this->birthdate;
        $this->child->dateOfAdmission = $this->dateOfAdmission;
        $this->child->save();
        $this->reset(['photo', 'firstName', 'birthdate', 'lastName', 'dateOfAdmission']);
        $this->flash('success', '¡Registro actualizado!', [
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => true,
            'text' => 'El registro ha sido actualizado exitosamente ',
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