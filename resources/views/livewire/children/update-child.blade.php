<div class="w-full p-2 sm:p-4">
  <div class="flex justify-between items-center">
    <x-header-text title="Nuevo registro" />
    <div class="hidden sm:block">
      <x-button href="{{ route('children.index') }}" icon="arrow-left" label="Cancelar" indigo teal />
    </div>
  </div>
  <div class="max-w-6xl mt-2">
    <main class="xl:mt-8">
      <x-card class="max-w-6xl px-4 py-10 mx-auto">
        <div class="mt-6 md:mt-0">
          <section class="md:grid md:grid-cols-3 md:gap-6">
            <article class="md:col-span-1">
              <h3 class="text-lg font-medium leading-6 text-gray-900">Creación de registro</h3>
              <p class="mt-1 text-gray-600">Una vez completado, su nuevo registro se actualizará con la información
                proporcionada.</p>
            </article>
            <article class="mt-5 md:mt-0 md:col-span-2">
              <div class="p-4 bg-white border rounded-md border-indigo-100">
                <div class="grid gap-4 mb-4">
                  <div class="space-y-2">
                    <x-errors only="lastName|firstName|birthdate|dateOfAdmission|photo" />
                    <x-input wire:model="firstName" label="Nombre" right-icon="user" placeholder="Nombre"
                      class="mb-4" />
                    <x-input wire:model="lastName" label="Apellido" right-icon="user" placeholder="Apellido"
                      class="mb-4" />
                    <x-datetime-picker wire:model="birthdate" label="Fecha de nacimiento" placeholder="DD/MM/YYYY"
                      parse-format="DD/MM/YYYY" without-time="false" class="mb-4" />
                    <x-datetime-picker wire:model="dateOfAdmission" label="Fecha de ingreso" placeholder="DD/MM/YYYY"
                      parse-format="DD/MM/YYYY" without-time="false" class="mb-4" />
                    <div
                      class="w-full flex relative flex-col {{ $errors->get('photo') ? 'border-negative-300 text-negative-600 hover:ring-negative-500' : 'border-gray-400 text-gray-600 hover:ring-indigo-600 hover:text-indigo-500 hover:ring' }} items-center p-2 sm:p-4 rounded-lg border-dashed tracking-wide uppercase border cursor-pointer delay-75 mt-2">
                      <div class="flex justify-end items-center w-full {{ $photo ? 'block' : 'hidden' }}">
                        <x-button.circle class="border-none outline-none" wire:click="resetImage">
                          <x-icon name="x" class="w-5 h-5 text-slate-400 hover:text-indigo-500" />
                        </x-button.circle>
                      </div>
                      <label class="relative w-full h-full flex justify-center items-center">
                        <div class="relative w-full h-full flex-col sm:p-4 flex justify-center items-center">
                          @if ($photo)
                          <img style="width:260px" src="{{ $photo->temporaryUrl() }}" class="rounded-lg">
                          @else
                          <img style="width:260px" src="{{ asset($child->photo) }}" class="rounded-lg">
                          @endif
                        </div>
                        <input accept="image/*" id="photo" type="file" wire:model.defer="photo" class="hidden">
                      </label>
                    </div>
                    <x-input-error :messages="$errors->get('photo')" />
                  </div>
                </div>
                <x-button wire:click="update" icon="plus" blue label="Actualizar" primary blue spinner class="mt-4" />
              </div>
            </article>
          </section>
        </div>
      </x-card>
    </main>
    <div class="block sm:hidden mb-20 mt-5">
      <x-button href="{{ route('children.index') }}" icon="arrow-left" label="Cancelar" indigo teal />
    </div>
  </div>
</div>