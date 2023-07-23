<!-- Settings Panel -->
<!-- Backdrop -->
<div x-show="isSettingsPanelOpen" class="fixed z-[40] inset-0 bg-black bg-opacity-50"
  @click="isSettingsPanelOpen = false" aria-hidden="true"></div>
<!-- Panel -->
<section x-transition:enter="transform transition-transform duration-300" x-transition:enter-start="translate-x-full"
  x-transition:enter-end="translate-x-0" x-transition:leave="transform transition-transform duration-300"
  x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full" x-show="isSettingsPanelOpen"
  class="fixed z-[50] inset-y-0 right-0 w-64 bg-white border-l border-indigo-100 rounded-l-3xl">
  <div class="px-4 py-8">
    <h2 class="text-lg font-semibold">Settings</h2>
  </div>
</section>