<div>
    <div class="container">
        @if ($metodos_pago->count() > 0)
            <div style=";margin-top:2%;">
                <h3 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                    style="font-size: 280%;font-weight:bold;margin-left: 20px;margin-top:2%;text-align:center">Métodos de
                    Pago</h3>
            </div>

            <div class="row row-cols-1 row-cols-md-3 g-4 m-4">
                @foreach ($metodos_pago as $metodoPago)
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title" style="text-align:center">Método de Pago</h5>
                                <p class="card-text">Número de tarjeta: {{ $metodoPago->num_tarjeta }}</p>
                                <p class="card-text">Nombre en la tarjeta: {{ $metodoPago->nombre_tarjeta }}</p>
                                <p class="card-text">Fecha de vencimiento: {{ $metodoPago->fecha_vencimiento }}</p>
                            </div>
                            <div class="card-footer text-muted d-flex justify-content-end align-items-center">
                                <div>
                                    <x-primary-button wire:click="abrir_modal_metodo({{ $metodoPago->id }}, 1)"
                                        class="btn btn-success">
                                        Editar
                                    </x-primary-button>
                                    <x-danger-button wire:click="delete({{ $metodoPago->id }})"
                                        wire:confirm="¿Está seguro que quiere eliminar este método de pago?">
                                        Eliminar
                                    </x-danger-button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p>No hay métodos de pago creados.</p>
        @endif

        <x-primary-button wire:click="abrir_modal_metodo(0 , 2)" class="btn btn-warning">
            {{ 'Create' }}
        </x-primary-button>
    </div>
    @include('livewire.metodo_pagos.metodo_pago_crear')

    <script>
        document.addEventListener('livewire:initialized', function() {
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
