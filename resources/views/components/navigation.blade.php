<div class="w-full  
px-4 py-2 bg-white border-b border-indigo-100  shadow-b rounded-b-3xl b hidden  sm:flex justify-end items-center ">
  <!-- User avatar -->
  <div class="relative flex items-center flex-shrink-0 p-2" x-data="{ isOpen: false }">
    <x-dropdown>
      <x-slot name="trigger">
          <img class="w-11 h-11 rounded-full shadow-md"
            src="https://avatars.githubusercontent.com/u/57622665?s=460&u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&v=4"
            alt="Ahmed Kamel" />
      </x-slot>

      <x-dropdown.item icon="cog" label="Preferences" />
      <x-dropdown.item icon="user" label="My Profile" />
  </x-dropdown>
 </div> 


</div>