<div>
    <div>
        <div style=";margin-top:2%;">
            <h3 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                style="font-size: 280%;font-weight:bold;margin-left: 20px;margin-top:2%;text-align:center">Direcciones
            </h3>
        </div>




        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <!-- Botón para agregar dirección -->
                <div class="col" style="">
                    <button class="btn btn-outline-dark " style="width:100%;height:100%"
                        wire:click="abrir_modal_direccion(0 , 2)" class="btn btn-warning">
                        <div class="text-center">
                            <i class="fa-solid fa-plus fa-5x"></i>
                            <h5 class="card-title mt-3 mb-0center">Agregar Direccion</h5>

                        </div>
                    </button>
                </div>

                <!-- Iteración sobre las direcciones -->
                @if ($direcciones)
                    @foreach ($direcciones as $direccion)
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $direccion->nombre_completo }}</h5>
                                    <p class="card-text"><strong>Dirección:</strong> {{ $direccion->direccion }}</p>
                                    <p class="card-text"><strong>Teléfono:</strong> {{ $direccion->num_tel }}</p>
                                    @if ($direccion->especificacion_dir)
                                        <p class="card-text"><strong>Especificación:</strong>
                                            {{ $direccion->especificacion_dir }}</p>
                                    @endif
                                    <p class="card-text"><strong>Ubicación:</strong> {{ $direccion->departamento }},
                                        {{ $direccion->ciudad }}</p>
                                    @if ($direccion->barrio)
                                        <p class="card-text"><strong>Barrio:</strong> {{ $direccion->barrio }}</p>
                                    @endif
                                    <p class="card-text"><strong>Código Postal:</strong> {{ $direccion->cod_postal }}
                                    </p>
                                </div>
                                <div class="card-footer text-muted d-flex justify-content-end align-items-center">
                                    <div>
                                        <button wire:click="abrir_modal_direccion({{ $direccion->id }}, 1)"
                                            class="btn btn-warning">
                                            Editar
                                        </button>
                                        <button class="btn btn-dark" wire:click="delete({{ $direccion->id }})"
                                            wire:confirm="¿Está seguro que quiere eliminar esta dirección?">
                                            Eliminar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <p class="card-text">No hay direcciones creadas.</p>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>

    </div>

    @include('livewire.direcciones.modal_direcciones')

    <script>
        document.addEventListener('livewire:initialized', function() {
            const modal_crear = new bootstrap.Modal('#direccion_modal');

            @this.on('abrir_modal_direccion', msg => {
                modal_crear.show();
            });
            @this.on('cerrar_modal_direccion', msg => {
                modal_crear.hide();
            });
        });
    </script>
</div>
