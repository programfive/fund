<div class="w-full  p-4 main-container">
    <x-header-text title="Lista de registros" />
    <main>
        <x-card class="mb-20 sm:mb-5">
            <div class="max-w-6xl sm:px-4 sm:py-10 mx-auto flex flex-col gap-10">
                <div>
                    <div class="md:grid md:grid-cols-3 md:gap-6">
                        <div class="md:col-span-1">
                            <div class="px-4 sm:px-0">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">Imágenes de perfil</h3>
                                <p class="mt-1 text-gray-600">Actualice el avatar y el encabezado de su cuenta, tamaño
                                    máximo de la imagen 1,024 MB</p>
                            </div>
                        </div>
                        @livewire('profile.partials.update-avatar')
                    </div>

                    <div class="py-8 hidden sm:block">
                        <div class="border-t  border-indigo-100 "></div>
                    </div>

                </div>
                <div>
                    <div class="md:grid md:grid-cols-3 md:gap-6">
                        <div class="md:col-span-1">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">información del perfil</h3>
                            <p class="mt-1 text-gray-600">Actualice la información de perfil y la dirección de correo
                                electrónico de su cuenta.</p>
                        </div>
                        @livewire('profile.partials.update-infomation')
                    </div>
                    <div class="hidden sm:block">
                        <div class="py-8">
                            <div class="border-t border-indigo-100 "></div>
                        </div>
                    </div>
                </div>

                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Actualiza contraseña</h3>
                        <p class="mt-1 text-gray-600">Asegúrese de que su cuenta esté usando una contraseña larga y
                            aleatoria para mantenerse seguro.</p>
                    </div>
                    @livewire('profile.partials.update-password')
                </div>
            </div>
        </x-card>
    </main>
</div>