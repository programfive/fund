<div x-data="{ open: false }" class="flex h-screen bg-gray-100">
    <!-- Sidebar -->
    <div class="flex flex-col w-64 bg-white border-r">
      <!-- Logo -->
      <div class="flex items-center justify-center h-16 border-b">
        <img src="logo.png" alt="Logo" class="w-8 h-8">
      </div>
      
      <!-- Menu -->
      <ul class="flex flex-col flex-1 overflow-y-auto">
        <li class="px-4 py-2 border-b">
          <a href="#" class="flex items-center space-x-2">
            <span class="text-gray-600">Inicio</span>
          </a>
        </li>
        <li class="px-4 py-2 border-b">
          <a href="#" class="flex items-center space-x-2">
            <span class="text-gray-600">Productos</span>
          </a>
        </li>
        <li class="px-4 py-2 border-b">
          <a href="#" class="flex items-center space-x-2">
            <span class="text-gray-600">Categorías</span>
          </a>
        </li>
        <li class="px-4 py-2 border-b">
          <a href="#" class="flex items-center space-x-2">
            <span class="text-gray-600">Usuarios</span>
          </a>
        </li>
      </ul>
    </div>
    
    <!-- Content -->
    <div class="flex flex-col flex-1">
      <!-- Toggle Button -->
      <button @click="open = !open" class="p-4">
        <svg x-show="!open" class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
        <svg x-show="open" class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </button>
    
    </div>
  </div>
  