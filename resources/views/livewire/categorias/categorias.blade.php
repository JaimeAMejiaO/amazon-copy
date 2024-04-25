<div>
    <div>
        <div class="row row-cols-1 row-cols-md-2 g-4 m-4">
            {{-- este es el bootn para agregar categorias --}}
            <div class="col p-0 ms-3" style="width:48%;height:40%">
                <button class="btn btn-outline-dark " style="width:100%;height:100%"
                    wire:click="abrir_modal_categoria(0 , 2)">
                    <div class="text-center">
                        <i class="fa-solid fa-plus fa-10x"></i>
                        <h5 class="card-title text-center">Agregar Categoria</h5>
                        <br>
                        <br>
                    </div>
                </button>
                {{-- /////////////////////////////////////////// --}}


                {{-- este es un caso especial y tiene tamaño diferente a las otras tarjetas --}}
            </div>
            {{-- /////////////////////////////////////////// --}}
            @foreach ($categorias as $categoria)
                <div class="col">
                    <div class="card h-100">
                        <h3 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                            style="font-size: 210%;font-weight:bold;text-align:center">Nombre departamento:
                            {{ $categoria->departamento->nombre }}</h3>
                        <h3 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                            style="font-size: 210%;font-weight:bold;text-align:center">Nombre categoria:
                            {{ $categoria->nombre }}</h3>
                        <h3 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                            style="font-size: 120%;font-weight:bold;text-align:center">Caracteristicas:
                            {{ $categoria->array_cat }}</h3>
                        <div class="d-flex align-items-end h-100" style="">
                            <button wire:click="abrir_modal_categoria({{ $categoria->id }}, 1)" class="btn btn-warning">
                                Editar
                            </button>
                            <button class="btn btn-dark" wire:click="delete({{ $categoria->id }})"
                                wire:confirm="¿Está seguro que quiere eliminar este método de pago?">
                                Eliminar
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

    @include('livewire.categorias.modal_agregar-categorias')

    <script>
        document.addEventListener('livewire:initialized', function() {
            const modal_crear = new bootstrap.Modal('#crear_categorias');

            @this.on('reset_check', msg => {
                document.querySelectorAll('.reiniciar').forEach(function(checkBox) {
                    checkBox.checked = false;
                });
            });
            @this.on('abrir_modal_categoria', msg => {
                modal_crear.show();
            });
            @this.on('cerrar_modal_categoria', msg => {
                modal_crear.hide();
            });
        });
    </script>
</div>
