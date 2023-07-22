<x-dropdown>
  <x-slot name="trigger">
    @if ( Auth::user()->avatar)
    <img class="md:w-14 md:h-14 w-10 h-10 rounded-full  shadow-md " src="{{  asset(Auth::user()->avatar)}}"
        alt="Avatar-profile">
    @else
     <x-icons.user-circle class="md:w-14 md:h-14 w-10 h-10 text-indigo-500" />
    @endif
  </x-slot>
  <x-dropdown.item icon="cog" label="Preferencias" href="{{ route('profile.update') }}" />

  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <x-dropdown.item icon="logout" label="Cerrar cesión" href="route('logout')" onclick="event.preventDefault();
            this.closest('form').submit();" />

  </form>
</x-dropdown>