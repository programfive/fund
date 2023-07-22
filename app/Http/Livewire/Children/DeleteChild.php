<?php

namespace App\Http\Livewire\Children;

use App\Models\Child;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class DeleteChild extends Component
{
    use LivewireAlert;
    public $child;
    public function mount(Child $child)
    {
        $this->child = $child;
    }
    public function confirmDelete()
    {
        $this->alert('warning', '¿Estás seguro de que deseas eliminar este registro?', [
            'showConfirmButton' => true,
            'confirmButtonText' => 'Eliminar',
            'showCancelButton' => true,
            'cancelButtonText' => 'Cancelar',
            'confirmButtonColor' => '#ef4444',
            'cancelButtonColor' => '#3b82f6',
            'onConfirmed' => 'confirmed',
            'listener' => 'confirmed',
            'timerProgressBar' => true,

        ]);
    }
    public function getListeners()
    {
        return [
            'confirmed'
        ];
    }
    public function confirmed()
    {
        if ($this->child) {
            $this->child->delete();
            $this->flash('success', '', [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
                'text' => '¡Registro eliminado con éxito!',
            ], 'dashboard');
        } else {
            $this->alert('error', 'No se pudo eliminar el registro.');
        }
    }
    public function render()
    {
        return view('livewire.children.delete-child');
    }
}