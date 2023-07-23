<!-- Mobile bottom bar -->
<nav aria-label="Options"
  class="fixed inset-x-0 bottom-0 flex flex-row-reverse items-center justify-between px-4 py-2 bg-white border-t border-indigo-100 sm:hidden shadow-t rounded-t-3xl">
  <!-- Menu button -->
  <button
    @click="(isSidebarOpen && currentSidebarTab == 'linksTab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'linksTab'"
    class="p-2 transition-colors rounded-lg shadow-md hover:bg-indigo-800 hover:text-white focus:outline-none focus:ring focus:ring-indigo-600 focus:ring-offset-white focus:ring-offset-2"
    :class="(isSidebarOpen && currentSidebarTab == 'linksTab') ? 'text-white bg-indigo-600' : 'text-gray-500 bg-white'">
    <x-icon name="menu-alt-2" class="w-6 h-6"/>
  </button>
  <!-- Logo -->
  <a href="#">
    <x-application-logo/>
  </a>

  <!-- dropdown user button -->
    <x-sidebar.dropdown-user align='top-left' />
</nav>