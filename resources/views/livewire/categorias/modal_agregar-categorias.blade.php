<x-modal title="{{ $titulo_modal }}" type="{{ $tipo_modal }}" id="crear_categorias">
    {{-- El titulo tiene que ser variable ya que va a ser el mismo modal para edita y crear --}}
    <form>
        <select class="form-select" aria-label="Seleccionar un departamento" wire:model.live="departamento_seleccionado">
            <option value="0" selected>Seleccionar Departamento al que pertenece la
                categoria</option>
            @foreach ($departamentos_cat as $departamento)
                <option value="{{ $departamento->id }}">{{ $departamento->nombre }}</option>
            @endforeach
        </select>
        @error('departamento_seleccionado')
            <div class="text-danger">{{ $message }}</div>
        @enderror
        <div class="mt-4 mb-3 text-center">
            <label for="#" class="form-label text-center" style="">Nombre de la categoria</label>
            <input wire:model.blur="nombre_cat" type="text" class="form-control"
                placeholder="Nombre de la categoria a crear" aria-label="Nombre de la categoria"
                aria-describedby="button-addon2">
            @error('nombre_cat')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3 text-center">
            <label for="caracteristicas" class="form-label text-center" style="">Caracteristicas de la
                categoria</label>
            <div>
                <input class="mt-4 mb-3" wire:model.blur="search"></input>
                <a class="btn btn-warning">Buscar</a>
            </div>

            @foreach ($caracteristicas as $array_cat => $caracteristica)
                <div class="form-check form-check-inline">
                    <input wire:click="seleccionarCaracteristica({{ $caracteristica->id }})"
                        {{ $magia_negra[$caracteristica->id] == true ? 'checked' : '' }}
                        class="form-check-input reiniciar" type="checkbox" id="{{ rand() . $caracteristica->id }}">
                    <label class="form-check-label" for="{{ rand() . $caracteristica->id }}">
                        {{ $caracteristica->nombre }}
                    </label>
                </div>
            @endforeach
            @error('array_cat')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="d-flex justify-content-center">
            {{ $caracteristicas->links('components.pagination-view') }}
        </div>
    </form>
</x-modal>
