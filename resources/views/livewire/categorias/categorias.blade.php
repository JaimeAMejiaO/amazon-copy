<div style="background-color:#F2F2F2; height:100vh">
    <br>
    <br>
    <div style="">
        <h3 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
            style="font-size: 280%;font-weight:bold;margin-left: 20px;text-align:center">Categorias
        </h3>
    </div>
    <div class="card mx-auto"
        style="max-height: 350px; overflow-y: auto;width:20%;max-width: 600px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
        <!-- margin-left:30%;margin-right:30% Agregamos estilos para el scroll -->
        {{-- Lista de categorías --}}
        <ul class="list-group" style="">
            @foreach ($categorias as $categoria)
                <li class="list-group-item mb-3">
                    <ul class="list-unstyled">
                        <li><strong>Nombre Departamento:</strong> {{ $categoria->departamento->nombre }}</li>
                        <li><strong>Nombre Categoría:</strong> {{ $categoria->nombre }}</li>
                        <li><strong>Características:</strong> {{ $categoria->array_cat }}</li>
                    </ul>
                    <div class="mt-3">
                        <button wire:click="abrir_modal_categoria({{ $categoria->id }}, 1)"
                            class="btn btn-warning me-2">Editar</button>
                        <button class="btn btn-dark" wire:click="delete({{ $categoria->id }})"
                            wire:confirm="¿Está seguro que quiere eliminar este método de pago?">Eliminar</button>
                    </div>
                </li>
            @endforeach

        </ul>


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
        @include('livewire.categorias.modal_agregar-categorias')
    </div>

    <div class="d-flex justify-content-center align-items-center" style="margin-top:3%">
        <button class="btn btn-warning" style="width: 200px;" wire:click="abrir_modal_categoria(0, 2)">
            <div class="text-center">
                <h5 class="card-title text-center">Agregar Categoría</h5>
            </div>
        </button>
    </div>

</div>
