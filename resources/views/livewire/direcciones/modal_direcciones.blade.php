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
            <input wire:model.blur="num_tel" type="number" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="mb-3">
            <label class="form-label">Calle/Numero/Apartamento</label>
            <input type="email" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="mb-3">
            <label class="form-label">Departamento</label>
            <input type="email" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="mb-3">
            <label class="form-label">Ciudad/Municipio</label>
            <input type="email" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="mb-3">
            <label class="form-label">Barrio</label>
            <input type="email" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="mb-3">
            <label class="form-label">Codigo Postal</label>
            <input type="email" class="form-control" id="exampleInputEmail1">
        </div>

    </form>
</x-modal>
