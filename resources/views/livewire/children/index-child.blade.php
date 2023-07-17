<div class="w-full p-4">
    <section class="flex flex-col gap-10">
        <div>
            <x-header-text title="Lista de registros" />
            <div class="flex sm:justify-between items-center mt-4 flex-col-reverse sm:flex-row gap-4 ">
                <div class="max-w-xl w-full ">
                    <x-input wire:model="search" icon="search" placeholder="Buscar.." />
                </div>
                <div class="self-end">
                    <x-button href="{{ route('children.create') }}" icon='plus' indigo label="Nuevo" teal />
                </div>
            </div>
        </div>
        <x-card class="mb-20 sm:mb-5">
            @if ($children->isEmpty())
            <p class="text-gray-600 text-lg text-center">¡No hay ningun registro que mostrar!</p>
            @else
            <div class=" grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6 my-8">
                @foreach ($children as $child)
                <div class="w-full m-auto max-w-sm bg-white border p-4  rounded-md border-indigo-100  shadow ">
                    <div class=" flex justify-end items-center">
                        <x-dropdown>
                            <x-dropdown.item icon="cog" label="Editar" href="{{ route('children.update',['child'=>$child])}}" />
                            <livewire:children.delete-child :child="$child" :wire:key="time().$child->id" />
                            <livewire:children.show-child :child="$child" :wire:key="time().$child->id" />
                        </x-dropdown>
                    </div>
                    <div class="flex  flex-col items-center ">
                        <img class="w-36 h-36 sm:w-44 sm:h-44 mb-3 rounded-full shadow-lg"
                            src="{{ asset($child->photo) }}" alt="{{ $child->name}}" />
                        <p class=" text-xl font-medium text-gray-900 ">{{ $child->firstName }}</p>
                        <p class="text-sm text-gray-500 ">{{ $child->lastName }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            {{ $children->links() }}
            @endif
        </x-card>
    </section>
</div>