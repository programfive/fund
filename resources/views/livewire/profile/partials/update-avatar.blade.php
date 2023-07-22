<div class="mt-5 md:mt-0 md:col-span-2">
    <div class="p-5 bg-white border border-indigo-100 rounded-md sm:p-6">
        <div class="grid grid-cols-6 gap-6">
            <div class="col-span-6 sm:col-span-4">
                    <p class="block text-sm font-medium text-gray-700">Avatar</p>
                    <div class="flex gap-2 md:gap-5 mt-2 space-x-5">
                        <span class="inline-block w-16 h-16 overflow-hidden rounded-full">
                            @if (Auth::user()->avatar)
                            <img class="w-full rounded-full object-cover" src="{{ asset(Auth::user()->avatar) }}"
                                alt="Avatar-profile">
                            @else
                                <x-icons.user-circle class="w-full h-full text-indigo-500" />
                            @endif
                        </span>
                        <div class="flex items-center space-x-2">
                            <label for="file-upload" type="button"
                                class="px-4 py-2 transition-colors duration-300 transform rounded-lg  bg-blue-500 text-white hover:bg-blue-600 focus:ring-blue-500">Subir</label>
                        </div>
                        <form action="post" enctype="multipart/form-data">
                            <input accept="image/*" id="file-upload" wire:model='avatar' name="avatar" type="file"
                                class="sr-only">
                        </form>
                    </div>
            </div>
            <div class="col-span-6 sm:col-span-4">
                <x-errors only="avatar" />
                <section class="mt-2">
                    <div
                        class="w-full flex relative flex-col {{ $errors->get('avatar') ? 'border-negative-300 text-negative-600 hover:ring-negative-500' : 'border-gray-400 text-gray-600 hover:ring-indigo-600 hover:text-indigo-500 hover:ring' }} items-center p-2 sm:p-4 rounded-lg border-dashed tracking-wide uppercase border  delay-75 mt-2">
                        <div class="flex justify-end items-center w-full {{ $avatar ? 'block' : 'hidden' }}">
                            <x-button.circle class="border-none outline-none" wire:click="resetAvatar">
                                <x-icon name="x" class="w-5 h-5 text-slate-400 hover:text-text-500 " />
                            </x-button.circle>
                        </div>
                        <div class="relative w-full h-full flex justify-center items-center">
                            @if ($avatar)
                            <img style="width: 260px" class="rounded-lg" src="{{ $avatar->temporaryUrl() }}">
                            @else
                            <div class="w-full h-full flex gap-2 flex-col justify-center items-center">
                                <x-icon name="cloud-upload"
                                    class="w-10 h-10 {{ $errors->get('avatar') ? 'text-negative-500' : 'text-blue-600' }}" />
                                <p class="mt-2 text-base leading-normal">Imagen del Avatar</p>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="mt-2">
                        <x-input-error :messages="$errors->get('avatar')" />
                    </div>
                </section>
                <div class="space-x-2 mt-5">
                    <x-button icon='save' spinner primary indigo label="Cambiar" wire:click="change" />
                </div>
            </div>
        </div>
    </div>
</div>