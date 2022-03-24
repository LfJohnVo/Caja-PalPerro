<div>
    <!-- Start of component -->
    <div class="max-w-sm p-6 tracking-wide bg-white border-2 border-gray-300 rounded-md shadow-lg">
        <div id="header" class="flex items-center mb-4">
            <img alt="avatar" class="w-20 border-2 border-gray-300 rounded-full"
                src="https://media4.giphy.com/media/12pJ8OxSWwO86Y/200w.gif?cid=82a1493be3gj640azvlr7l0zy1r05cpd9vjh83wrqp9pyuhy&rid=200w.gif&ct=g"
                style="width: 40%;" />
            <div id="header-text" class="ml-6 leading-5 sm">
                <h4 id="name" class="text-xl font-semibold">Fecha: {{ $fechahoy }}</h4>
                <h5 id="job" class="font-semibold text-blue-600">Caja:
                    @if ($montocaja)
                        $ {{ $montocaja }}
                    @else
                        Sin registro
                    @endif
                </h5>
                <br>
                <x-button
                    class="text-sm text-gray-100 transition-colors duration-700 transform bg-indigo-500 border-indigo-300 rounded-lg hover:bg-blue-400 focus:border-4"
                    onclick="$openModal('blurModal')" spinner="save" label="Editar" />
            </div>
        </div>
    </div>
    <!-- End of component -->

    <x-modal.card blur title="Actualizar caja" blur wire:model.defer="blurModal">
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
            <div class="col-span-1 sm:col-span-2">
                <x-inputs.currency label="Monto" placeholder="Monto" icon="currency-dollar" thousands="," decimal="."
                    precision="4" wire:model.lazy="monto" />
            </div>
        </div>

        <x-slot name="footer">
            <div class="flex justify-between gap-x-4">
                <div class="flex">
                    <x-button flat label="Cancelar" x-on:click="close" />
                    <x-button bg-green-500 label="Actualizar" wire:click="save" spinner="save" x-on:click="close" />
                </div>
            </div>
        </x-slot>
    </x-modal.card>
</div>
