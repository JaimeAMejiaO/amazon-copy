<x-modal title="{{$titulo_modal}}" type="{{$tipo_modal}}" id="crear_tarjeta">
    <div class="input-group mb-lg-3">
        <input wire:model.blur="num_tarjeta" id="num_tarjeta" name="num_tarjeta" type="text" class="form-control"
            placeholder="Numero Tarjeta" aria-label="Numero Tarjeta" aria-describedby="basic-addon1" required>
        @error('num_tarjeta')
            <span class="text-danger">
                {{ $message }}
            </span>
        @enderror
    </div>

    <div class="input-group mb-3">
        <input wire:model.blur="nombre_tarjeta" id="nombre_tarjeta" name="nombre_tarjeta" type="text"
            class="form-control" placeholder="Nombre Tarjeta" aria-label="Nombre Tarjeta"
            aria-describedby="basic-addon1" required>
        @error('nombre_tarjeta')
            <span class="text-danger">
                {{ $message }}
            </span>
        @enderror
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text">Fecha tarjeta</span>
        <div class="col-2" style="margin-left: 10%;">
            <select wire:model.live="mes_actual" class="form-select" aria-label="Default select example" required>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
            </select>
        </div>
        <span class="input-group-text">/</span>
        <div class="col-2" style="">
            <select wire:model.live="anio_actual" class="form-select" aria-label="Default select example">
                @for ($i = $anio_actual; $i <= $anio_actual + 20; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
        </div>
        @error('fecha_vencimiento')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
    </div>

    <div class="">
        <input wire:model.blur="cvv" id="cvv" name="cvv" type="text"
            class="d-flex justify-content-center text-center" placeholder="CVV" aria-label="CVV"
            aria-describedby="basic-addon1">
        @error('cvv')
            <span class="text-danger">
                {{ $message }}
            </span>
        @enderror
    </div>

</x-modal>
