<header class="relative z-0 flex items-center justify-end flex-shrink-0 p-4 sm:p-0">
  <!-- Mobile sub header button -->
  <button @click="isSubHeaderOpen = !isSubHeaderOpen"
    class="p-2 text-gray-400 bg-white rounded-lg shadow-md sm:hidden hover:text-gray-600 focus:outline-none focus:ring focus:ring-white focus:ring-offset-gray-100 focus:ring-offset-4">
    <x-icon name="dots-vertical" class="w-6 h-6" />
  </button>

  <!-- Mobile sub header -->
  <div x-transition:enter="transform transition-transform" x-transition:enter-start="translate-y-full opacity-0"
    x-transition:enter-end="translate-y-0 opacity-100" x-transition:leave="transform transition-transform"
    x-transition:leave-start="translate-y-0 opacity-100" x-transition:leave-end="translate-y-full opacity-0"
    x-show="isSubHeaderOpen" @click.away="isSubHeaderOpen = false"
    class="absolute flex z-[44] items-center justify-between p-2 bg-white rounded-md shadow-lg sm:hidden top-16 left-5 right-5">
    <!-- Seetings button -->
    <x-sidebar.button-primary @click="isSettingsPanelOpen = true; isSubHeaderOpen = false">
      <x-icon name="cog" class="w-6 h-6" />
    </x-sidebar.button-primary>

    <!-- Messages button -->
    <x-sidebar.button-primary @click="isSidebarOpen = true; currentSidebarTab = 'messagesTab'; isSubHeaderOpen = false">
      <x-icon name="chat-alt" class="w-6 h-6" />
    </x-sidebar.button-primary>

    <!-- Notifications button -->
    <x-sidebar.button-primary @click="isSidebarOpen = true; currentSidebarTab = 'notificationsTab'; isSubHeaderOpen = false">
      <x-icon name="bell" class="w-6 h-6" />
    </x-sidebar.button-primary>
  </div>
</header>
