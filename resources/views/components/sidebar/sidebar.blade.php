<!-- Sidebar -->
<div class="flex  sm:sticky inset-y-0 z-[15] flex-shrink-0 transition-all">
  <div x-show="isSidebarOpen" @click="isSidebarOpen = false"
    class="fixed inset-0 z-10 bg-black bg-opacity-50 lg:hidden"></div>
  <div x-show="isSidebarOpen" class="fixed inset-y-0 z-10 w-16 bg-white"></div>

  <x-sidebar.mobile-bottom-bar />

  <!-- Left mini bar -->
  <nav aria-label="Options"
    class="z-20    bg-white flex-col items-center flex-shrink-0 hidden w-16 py-4  border-r-2 border-indigo-100 shadow-md sm:flex  rounded-br-3xl">
    <!-- Logo -->
    <div class="flex-shrink-0 py-4">
      <a href="#">
        <x-application-logo />
      </a>
    </div>
    <div class="flex flex-col items-center flex-1 p-2 space-y-4">
      <!-- Menu button -->

      <button
        @click="(isSidebarOpen && currentSidebarTab == 'linksTab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'linksTab'"
        class="p-2 transition-colors rounded-lg shadow-md hover:bg-indigo-800 hover:text-white focus:outline-none focus:ring focus:ring-indigo-600 focus:ring-offset-white focus:ring-offset-2"
        :class="(isSidebarOpen && currentSidebarTab == 'linksTab') ? 'text-white bg-indigo-600' : 'text-gray-500 bg-white'">
        <x-icon name="menu-alt-2" class="w-6 h-6" />
      </button>
      <!-- Messages button -->
      <button
        @click="(isSidebarOpen && currentSidebarTab == 'messagesTab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'messagesTab'"
        class="p-2 transition-colors rounded-lg shadow-md hover:bg-indigo-800 hover:text-white focus:outline-none focus:ring focus:ring-indigo-600 focus:ring-offset-white focus:ring-offset-2"
        :class="(isSidebarOpen && currentSidebarTab == 'messagesTab') ? 'text-white bg-indigo-600' : 'text-gray-500 bg-white'">
        <x-icon name="chat-alt" class="w-6 h-6" />
      </button>
      <!-- Notifications button -->
      <button
        @click="(isSidebarOpen && currentSidebarTab == 'notificationsTab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'notificationsTab'"
        class="p-2 transition-colors rounded-lg shadow-md hover:bg-indigo-800 hover:text-white focus:outline-none focus:ring focus:ring-indigo-600 focus:ring-offset-white focus:ring-offset-2"
        :class="(isSidebarOpen && currentSidebarTab == 'notificationsTab') ? 'text-white bg-indigo-600' : 'text-gray-500 bg-white'">
        <x-icon name="bell" class="w-6 h-6" />
      </button>
    </div>
  </nav>

  <div x-transition:enter="transform transition-transform duration-300" x-transition:enter-start="-translate-x-full"
    x-transition:enter-end="translate-x-0" x-transition:leave="transform transition-transform duration-300"
    x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" x-show="isSidebarOpen"
    class="fixed inset-y-0 left-0 z-10 flex-shrink-0 w-64 bg-white border-r-2 border-indigo-100 shadow-lg sm:left-16 rounded-tr-3xl sm:rounded-tr-none rounded-br-3xl sm:w-72 lg:static lg:w-64">
    <nav x-show="currentSidebarTab == 'linksTab'" aria-label="Main" class="flex flex-col h-full">
      <!-- Logo -->
      <div class="flex items-center justify-center flex-shrink-0 py-10">
        <a href="#">
          <x-application-logo class="w-24 h-auto" />
        </a>
      </div>

      <!-- Links -->
      <x-sidebar.content />
    </nav>

    <section x-show="currentSidebarTab == 'messagesTab'" class="px-4 py-6">
      <h2 class="text-xl">Messages</h2>
    </section>

    <section x-show="currentSidebarTab == 'notificationsTab'" class="px-4 py-6">
      <h2 class="text-xl">Notifications</h2>
    </section>
  </div>
</div>