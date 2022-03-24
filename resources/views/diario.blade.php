<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Diario
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            @livewire('caja-component')
            <br>
            @livewire('diario-component')
        </div>
    </div>
</x-app-layout>
