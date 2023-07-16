<div class="w-full p-4">
    <section class="flex flex-col gap-10">
        <div>
            <x-header-text title="Lista de registros" />
            <div class="flex sm:justify-between items-center mt-4 flex-col-reverse sm:flex-row gap-4 ">
                <div class="max-w-xl w-full ">
                    <x-input right-icon="search" placeholder="Buscar.." />
                </div>
                <div class="self-end">
                    <x-button href="{{ route('children.create') }}" icon='plus' indigo label="Nuevo" teal />
                </div>
            </div>
        </div>
        <x-card class=" grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6 my-8">
            
            @foreach ($children as $child)

            <div class="w-full max-w-sm bg-white border p-4  rounded-md border-indigo-100  shadow ">
         
                <div class="flex flex-col items-center ">
                    <img class="w-36 h-36 sm:w-44 sm:h-44 mb-3 rounded-full shadow-lg" src="{{ asset($child->photo) }}" alt="{{ $child->name}}"/>
                    <h5 class=" text-xl font-medium text-gray-900 ">{{ $child->firstName }}</h5>
                    <span class="text-sm text-gray-500 ">{{ $child->lastName }}</span>
                    <div class="flex space-x-3 ">
                       <!--botton-->
                    </div>
                </div>
            </div>
             
            @endforeach
        </x-card>
        
    </section>
</div>