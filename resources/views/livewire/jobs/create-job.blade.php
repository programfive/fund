<div>
    <x-button label="Crear" indigo wire:click="$set('open',true)" />
    <x-modal.card title="Edit Customer"  wire:model.defer="open">
        <div class="flex flex-col gap-4">
            <x-input wire:model='name' label="Nombre" placeholder="Nombre" rightIcon="pencil"/>
            <x-time-picker
            label="Hora"
            placeholder="00:00"
            format="24"
            wire:model='hour'
            />
            <div class="col-span-2">
                <x-textarea wire:model='description' label="Descripción" placeholder="Descripción..." />
            </div>
        </div>
        <x-slot name="footer">
            <div class="flex justify-end items-center">
                <x-button primary label="Save" wire:click="create" />
            </div>
        </x-slot>
    </x-modal.card>
</div>