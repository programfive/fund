@php
    use App\Helpers\Date;
@endphp

<div class="w-full  p-4 main-container">
    @if ($child)
        <x-modal max-width="sm" wire:model.defer="open">
            <x-card title="Registro #{{ $child->id }}">
                <div class="flex justify-center items-center">
                    <img class="w-36 h-36 sm:w-44 sm:h-44 mb-3 rounded-full shadow-lg" src="{{ asset($child->photo) }}"
                         alt="{{ $child->firstName }}"/>
                </div>
                <p class="text-gray-700 font-bold leading-loose">Nombre:
                    <span class="text-secondary-700 font-normal">{{ $child->firstName }}</span>
                </p>
                <p class="text-gray-700 font-bold leading-loose">Apellido:
                    <span class="text-secondary-700 font-normal">{{ $child->lastName }}</span>
                </p>
                <p class="text-gray-700 font-bold leading-loose">Edad:
                    <span class="text-secondary-700 font-normal">{{ Date::calculateAge($child->birthdate) }} años</span>
                </p>
                <p class="text-gray-700 font-bold leading-loose">Fecha de nacimiento:
                    <span class="text-secondary-700 font-normal">{{ $child->birthdate }}</span>
                </p>
                <p class="text-gray-700 font-bold leading-loose">Fecha de ingreso:
                    <span class="text-secondary-700 font-normal">{{ $child->dateOfAdmission }}</span>
                </p>
                <p class="text-gray-700 font-bold leading-loose">Creado en:
                    <span class="text-secondary-700 font-normal">{{ Date::dateFormat($child->created_at) }}</span>
                </p>
                <p class="text-gray-700 font-bold leading-loose">Última modificación en:
                    <span class="text-secondary-700 font-normal">{{ Date::dateFormat($child->updated_at) }}</span>
                </p>
                <p class="text-gray-700 font-bold leading-loose">Creado por:
                    <span class="text-secondary-700 font-normal">{{ $child->user->name }}</span>
                </p>
               
                <x-slot name="footer">
                    <div class="flex justify-end gap-x-4">
                        <x-button primary label="Cancelar" x-on:click="close" />
                    </div>
                </x-slot>
            </x-card>
        </x-modal>
    @endif
    <section class="flex flex-col gap-10">
        <div>
            <x-header-text title="Lista de registros" />
            <div class="flex sm:justify-between items-center mt-4 flex-col-reverse sm:flex-row gap-4">
                <div class="max-w-xl w-full">
                    <x-input wire:model.debounce.500ms="search" icon="search" placeholder="Buscar.." />
                </div>
                <div class="self-end">
                    <x-button href="{{ route('children.create') }}" icon='plus' indigo label="Nuevo" teal />
                </div>
            </div>
        </div>

        <x-card  class="mb-20 sm:mb-5 ">
            @if ($children->isEmpty())
                <p class="text-gray-600 text-lg text-center">¡No hay ningún registro que mostrar!</p>
            @else
                <div   class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6 my-8 md:px-5">
                    @foreach ($children as $child)
                    <div  class="w-full m-auto max-w-sm bg-white border p-4 rounded-md border-indigo-100 shadow transform transition duration-500 hover:scale-110">
                            <div   class="flex justify-end items-center">
                                <x-dropdown>
                                    <x-dropdown.item icon="cog" label="Editar"
                                                     href="{{ route('children.update', ['child' => $child]) }}" />
                                    <livewire:children.delete-child :child="$child" :wire:key="time().$child->id" />
                                    <x-dropdown.item icon="eye" wire:click="Show({{ $child }})"
                                                     label="Ver información" />
                                </x-dropdown>
                            </div>
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
