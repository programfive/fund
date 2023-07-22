<div class="mt-5 md:mt-0 md:col-span-2">
    <div
        class="px-4 py-5 bg-white rounded-b-md border border-indigo-100 sm:p-6 rounded-tl-md rounded-tr-md">
        <x-errors only="currentPassword|newPassword" />
        <form wire:submit.prevent="updatePassword" class="max-w-2xl ">
            <div class="flex flex-col gap-2">
                <x-inputs.password name='currentPassword' wire:model='currentPassword' label="Contraceña" />
                <x-inputs.password name='newPassword' wire:model='newPassword' label="Nueva contraceña" />
                <x-inputs.password name='newPassword_confirmation' wire:model='newPassword_confirmation' label="Confirmar contraceña" />
            </div>
            <div class=" space-x-2 mt-5">
                <x-button icon='save' spinner primary indigo label="Cambiar" wire:click="save" />
            </div>
        </form>
    </div>
</div>