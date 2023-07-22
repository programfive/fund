<?php

namespace App\Http\Livewire\Profile\Partials;

use Livewire\Component;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Helpers\Images;

class UpdateAvatar extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    public $avatar;
    protected $rules = [
        'avatar' => 'required|image|max:1024',
    ];
    
    private function saveImage($user, string $imageName): void
    {
        $user->avatar = 'storage/images/avatars/' . $imageName;
        $user->save();
    }
    public function change()
    {
        $this->validate();

        $user = auth()->user();
        $newImageName =Images::generateImageName($this->avatar);
        $path="app/public/images/avatars/";
        $resize=300;
        Images::resizeAndSaveImage($newImageName,$this->avatar,$path,$resize);
        $this->saveImage($user, $newImageName);
        $this->flash('success', '', [
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => true,
            'text' => '¡El avatar se ha actualizado correctamente!',
        ], 'dashboard');
    }

    public function resetAvatar()
    {
        $this->reset(['avatar']);
    }

    public function render()
    {
        return view('livewire.profile.partials.update-avatar');
    }
}