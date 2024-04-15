<div>
    <div class="container">
        @if ($metodos_pago->count() > 0)
            <h1>Métodos de Pago</h1>
            <ul>
                @foreach ($metodos_pago as $metodoPago)
                    <li>
                        <p>Numero de tarjeta: {{ $metodoPago->num_tarjeta }}</p>
                        <p>Nombre de tarjeta: {{ $metodoPago->nombre_tarjeta }}</p>
                        <p>Fecha de vencimiento: {{ $metodoPago->fecha_vencimiento }}</p>
                        <p>Fecha de vencimiento: {{ $metodoPago->cvv }}</p>
                        <x-primary-button wire:click="abrir_modal_metodo({{$metodoPago->id}} , 1)">
                            {{ 'Edit' }}
                        </x-primary-button>
                        <x-danger-button wire:click="delete({{ $metodoPago->id }})"
                            wire:confirm="¿Está seguro que quiere eliminar este metodo de pago?">
                            {{ 'Delete' }}
                        </x-danger-button>
                    </li>
                @endforeach
            </ul>
        @else
            <p>No hay métodos de pago creados.</p>
        @endif
        
        <x-primary-button wire:click="abrir_modal_metodo(0 , 2)">
            {{ 'Create' }}
        </x-primary-button>
    </div>
    @include('livewire.metodo_pagos.metodo_pago_crear')
    
    <script>
        document.addEventListener('livewire:initialized', function () {
            const modal_crear = new bootstrap.Modal('#crear_tarjeta');

            @this.on('abrir_modal_metodo', msg => {
                modal_crear.show();
            });
            @this.on('cerrar_modal_metodo', msg => {
                modal_crear.hide();
            });
        });    
    </script>
</div>
