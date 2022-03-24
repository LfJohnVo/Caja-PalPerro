<x-app-layout>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="inline-flex items-center p-2 text-sm leading-none text-purple-600 bg-white rounded-full shadow">
                <h1 class="inline-flex items-center justify-center h-6 px-3 text-white bg-purple-600 rounded-full text-">
                    Diario</h1>
            </div>
            <br><br>
            @livewire('caja-component')
        </div>
        <br>
        <div class="mx-auto max-w-7xl">
            @livewire('diario-component')
        </div>
    </div>
</x-app-layout>
