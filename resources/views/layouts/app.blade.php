<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

  <!-- Scripts -->
  <wireui:scripts />
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @livewireStyles
</head>

<body>
  <!-- component -->
  <div x-data="setup()" x-init="$refs.loading.classList.add('hidden');" @resize.window="watchScreen()">
    <div class="flex overflow-y-auto h-screen antialiased text-gray-900 bg-gray-100 dark:bg-dark dark:text-light">
      <!-- Loading screen -->
      <div>
        <x-loading-screen x-ref="loading" />
      </div>

      <x-sidebar.sidebar />
      <div class="flex flex-col flex-1">
        <x-sidebar.button-header />
        <x-navbar />
        <!-- Main -->
        <main class="flex flex-1 ">
          {{$slot}}
        </main>
      </div>
    </div>
    <!-- Panels -->
    <x-sidebar.settings-panel />
  </div>
  </div>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <x-livewire-alert::scripts />
  @livewireScripts
</body>

</html>