<?php

namespace App\Http\Livewire\Profile\Partials;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Validation\Rules\Password;

class UpdatePassword extends Component
{
    use LivewireAlert;

    public $currentPassword;
    public $newPassword;
    public $newPassword_confirmation; 



    public function save()
    {
        /** @var \App\Models\User $user */
        $user = auth()->user();
        $this->validate([
            'currentPassword' => ['required','min:8', function ($attribute, $value, $fail) use ($user) {
                if (!Hash::check($value, $user->password)) {
                    $fail('La contraseña actual es incorrecta.');
                }
            }],
            'newPassword' => ['required','min:8', 'confirmed', Password::defaults()],
        ]);
        $user->update([
            'password' => Hash::make($this->newPassword)
        ]);
    
        $this->reset(['currentPassword', 'newPassword', 'newPassword_confirmation']); 
    
        $this->flash('success', '¡La contraseña se ha actualizado correctamente!', [], 'dashboard');
    }
    
    public function render()
    {
        return view('livewire.profile.partials.update-password');
    }
}