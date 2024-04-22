<div class="container mt-4">
    @if ($marcas->count() > 0)
        <div class="card" style="margin-left:40%;margin-right:40% ">
            <div class="card-body" style="">
                <h5 class="card-title">Marcas existentes</h5>
                <ul class="list-group list-group-flush">
                    @foreach ($marcas as $marca)
                        @if (isset($marca->editar) && $marca->editar == 1)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <input wire:model.blur="nombre_marca"></input>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-sm btn-outline-primary"
                                        wire:click="update({{ $marca->id }})">
                                        <i class="fa-solid fa-floppy-disk"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-outline-danger"
                                        wire:click="cancelar_editar">
                                        <i class="fa-solid fa-xmark"></i>
                                    </button>
                                </div>
                            </li>
                            @else
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ $marca->nombre }}
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-sm btn-outline-primary"
                                        wire:click="boton_editar({{ $marca->id }})">
                                        <i class="fa fa-pencil"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-outline-danger"
                                        wire:click="delete({{ $marca->id }})"
                                        onclick="return confirm('¿Está seguro que desea eliminar esta marca?')">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    @else
        <div class="alert alert-info mt-4" role="alert">
            No hay marcas creadas.
        </div>
    @endif

    <div class="card mt-4" style="margin-left:40%;margin-right:40% ">
        <div class="card-body">
            <h5 class="card-title">Agregar nueva marca</h5>
            <div class="input-group mb-3">
                <input wire:model.defer="nombre_marca" type="text" class="form-control"
                    placeholder="Nombre de la marca" aria-label="Nombre de la marca" aria-describedby="button-addon2">
                <button class="btn btn-primary" type="button" wire:click="store" id="button-addon2">Guardar</button>
            </div>
        </div>
    </div>
</div>
