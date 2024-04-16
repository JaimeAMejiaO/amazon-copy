<div>
    <div>
        <div class="row row-cols-1 row-cols-md-2 g-4 m-4">
            {{-- este es el bootn para agregar categorias --}}
            <div class="col p-0 ms-3" style="width:48%;height:40%">
                <button class="btn btn-outline-dark " style="width:100%;height:100%" data-bs-toggle="modal"
                    data-bs-target="#crear_direccion">
                    <div class="text-center">
                        <i class="fa-solid fa-plus fa-10x"></i>
                        <h5 class="card-title text-center">Agregar Direccion</h5>
                        <br>
                        <br>
                    </div>
                </button>
                {{-- /////////////////////////////////////////// --}}


                {{-- este es un caso especial y tiene tamaño diferente a las otras tarjetas --}}
            </div>
            @if ($direcciones->count() > 0)
                <div class="col ">
                    @foreach ($direcciones as $direccion)
                        <div class="card" style="margin-left:14px ">

                            <p class="text-center">Nombre: {{ $direccion->nombre_completo }}</p>
                            <p class="text-center">Dirección: {{ $direccion->direccion }}</p>
                            <p class="text-center">Teléfono: {{ $direccion->telefono }}</p>
                            @if ($direccion->especificacion_dir)
                                <p class="text-center">Especificación: {{ $direccion->especificacion_dir }}</p>
                            @endif
                            <p class="text-center">{{ $direccion->departamento }}, {{ $direccion->ciudad }}
                                @if ($direccion->barrio)
                                    , {{ $direccion->barrio }}
                                @endif
                            </p>
                            <p class="text-center">{{ $direccion->codigo_postal }}</p>
                            <div>
                                <x-primary-button wire:click="abrir_modal_direccion({{$direccion->id}} , 1)">
                                    {{ 'Edit' }}
                                </x-primary-button>
                                <x-danger-button wire:click="delete({{ $direccion->id }})"
                                    wire:confirm="¿Está seguro que quiere eliminar esta direccion?">
                                    {{ 'Delete' }}
                                </x-danger-button>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p>No hay métodos de pago creados.</p>
            @endif

            <x-primary-button wire:click="abrir_modal_direccion(0 , 2)">
                {{ 'Create' }}
            </x-primary-button>

            {{-- /////////////////////////////////////////// --}}
        </div>
    </div>

    @include('livewire.direcciones.modal_direcciones')

    <script>
        document.addEventListener('livewire:initialized', function () {
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
