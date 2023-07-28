<div>
    <x-modal.card title="Edit Customer"  wire:model.defer="open">
        <div class="flex flex-col gap-4">
            <x-time-picker
            label="Hora de inicio"
            placeholder="hh:mm"
            interval="10"
        />

            <x-time-picker
            label="Hora de finalización"
            placeholder="hh:mm"
            interval="10"
        />
            <x-select
            label="Search a User"
            placeholder="Select some user"
            option-label="name"
            option-value="id"
        />
        </div>
        <x-slot name="footer">
            <div class="flex justify-end items-center gap-x-4">
                <x-button primary label="Save" wire:click="save" />
            </div>
        </x-slot>
    </x-modal.card>
</div>
