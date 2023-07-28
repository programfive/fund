<div class="w-full  p-2 sm:p-4">
        @livewire('jobs.partials.assign-work')
    <section class="flex flex-col gap-10">
        <div>
            <x-header-text title="Asignar Trabajos" />
            <div class="flex sm:justify-between items-center mt-4 flex-col-reverse sm:flex-row gap-4">
                <div class="max-w-xl w-full">
                    <x-input wire:model.debounce.500ms="search" icon="search" placeholder="Buscar.." />
                </div>
                <div class="self-end">
                    @livewire('jobs.create-job')
                   
                </div>
            </div>
        </div>
        <x-card  class="mb-20 sm:mb-5 ">
            @if ($children->isEmpty())
                <p class="text-gray-600 text-lg text-center">¡No hay ningún registro que mostrar!</p>
            @else
                <div   class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6 my-8 md:px-5">
                    @foreach ($children as $child)
                    <div  class="w-full m-auto max-w-sm bg-white border p-4 rounded-md border-indigo-100 shadow transform transition duration-500 sm:hover:scale-110">
                        <x-button.circle secondary icon="clipboard-list" wire:click="createModal({{ $child }})" />
                            <div class="flex flex-col items-center">
                                <img class="w-36 h-36 sm:w-44 sm:h-44 mb-3 rounded-full shadow-lg"
                                     src="{{ asset($child->photo) }}" alt="{{ $child->name }}" />
                                <p class="text-xl font-medium text-gray-900 capitalize">{{ $child->firstName }}</p>
                                <p class="text-sm text-gray-500 capitalize">{{ $child->lastName }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $children->links() }}
            @endif
        </x-card>
    </section>

</div>
