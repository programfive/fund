<?php

namespace App\Http\Livewire\Profile\Partials;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
class UpdateInfomation extends Component
{
    use LivewireAlert;
    public $name;
    public $email;
    public $phone;

    protected $rules = [
        'name' => 'required|max:100',
        'email' => 'required|email',
    ];
    public function mount()
    {
        $user = Auth::user();
        $this->name = $user->name;
        $this->email = $user->email;
        $this->phone = $user->phone;
    }


    public function save()
    {
        $this->validate();
        /** @var \App\Models\User $user */
        $user = Auth::user();
        $user->update([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
        ]);
        $this->flash('success', '', [
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => true,
            'text' => 'El registro ha sido exitosamente actualizado',
        ], 'dashboard');
    }
    public function render()
    {
        return view('livewire.profile.partials.update-infomation');
    }
}