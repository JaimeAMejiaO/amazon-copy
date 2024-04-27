<x-modal title="{{ $titulo_modal }}" type="{{ $tipo_modal }}" id="direccion_modal">
    {{-- El titulo tiene que ser variable ya que va a ser el mismo modal para edita y crear --}}
    <form>
        <div class="mb-3">
            <label class="form-label">Nombre Completo</label>
            <input wire:model.blur="nombre_completo" name="nombre_completo" type="text" class="form-control"
                id="nombre_completo">
        </div>
        <div class="mb-3">
            <label class="form-label">Numero</label>
            <input wire:model.blur="num_tel" type="number" class="form-control" id="num_tel">
        </div>
        <div class="mb-3">
            <label class="form-label">Calle/Numero/Apartamento</label>
            <input wire:model.blur="direccion" type="text" class="form-control" id="direccion">
        </div>
        <div class="mb-3">
            <label class="form-label">Especificacion de la direccion (Opcional)</label>
            <input wire:model.blur="especificacion_dir" type="especificacion_dir" class="form-control"
                id="especificacion_dir">
        </div>
        <div class="mb-3">
            <label class="form-label">Departamento</label>
            <select wire:model="departamento_seleccionado" name="departamentos" id="departamentos">
                @if (is_array($departamentos))
                    @foreach ($departamentos as $departamento)
                        <option value="{{ $departamento }}">{{ $departamento }}</option>
                    @endforeach
                @endif
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Ciudad/Municipio</label>
            <select wire:model="municipio_seleccionado" name="municipios" id="municipios">
                @if (is_array($municipios))
                    @foreach ($municipios as $municipio)
                        <option value="{{ $municipio }}">{{ $municipio }}</option>
                    @endforeach
                @endif
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Barrio</label>
            <input wire:model.blur="barrio" type="text" class="form-control" id="barrio">
        </div>
        <div class="mb-3">
            <label class="form-label">Codigo Postal</label>
            <input wire:model.blur="cod_postal" type="text" class="form-control" id="cod_postal">
        </div>
    </form>
</x-modal>
