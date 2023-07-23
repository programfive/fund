<div class="p-2 flex flex-col gap-4">
    <x-sidebar.link title="Inicio" href="{{ route('dashboard') }}" :isActive="request()->routeIs('dashboard')">
        <x-slot name="icon">
            <x-icon name="home" class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>
    <x-sidebar.dropdown title="Registros" :active="Str::startsWith(request()->route()->uri(), 'child')">
        <x-slot name="icon">
            <x-icon name="document" class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
        <x-sidebar.sublink title="Lista de registro" href="{{ route('children.index') }}"
            :active="request()->routeIs('children.index')" />
        <x-sidebar.sublink title="Crear Registro" href="{{ route('children.create') }}"
            :active="request()->routeIs('children.create')" />
    </x-sidebar.dropdown>
</div>