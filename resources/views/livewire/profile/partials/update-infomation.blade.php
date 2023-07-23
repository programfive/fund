<div class="mt-5 md:mt-0 md:col-span-2">
    
    <div
        class="sm:px-4 sm:py-5  p-2 border rounded-md border-indigo-100 sm:p-6 rounded-tl-md rounded-tr-md">
        <x-errors only="name|email|phone" />
        <form wire:submit.prevent="updateUser" class="max-w-2xl">
            <div class="flex flex-col gap-2 ">
                <x-input wire:model='name' rightIcon="user" label="Nombre" placeholder="Nombre" />
                <x-input wire:model='email' rightIcon="mail" label="Correo electronico" placeholder="Correo electronico" />
                <x-inputs.phone wire:model='phone' label="Telefono" rightIcon='phone' placeholder="Telefono" />
            </div>
            <div class=" space-x-2 mt-5">
                <x-button  icon='save' spinner primary indigo label="Cambiar" wire:click="save" />
            </div>
        </form>
    </div>
</div>
