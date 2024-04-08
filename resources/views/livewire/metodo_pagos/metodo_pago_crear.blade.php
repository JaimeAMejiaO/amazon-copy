<x-modal title="Agregar Tarjeta" type="store" id="crear_tarjeta">
    <div class="input-group mb-3">
        <input id="num_tarjeta" name="num_tarjeta" type="text" class="form-control" placeholder="Numero Tarjeta" aria-label="Numero Tarjeta"
            aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        <input id="nombre_tarjeta" name="nombre_tarjeta" type="text" class="form-control" placeholder="Nombre Tarjeta" aria-label="Nombre Tarjeta"
            aria-describedby="basic-addon1">
    </div>



    <div class="input-group mb-3">
        <span class="input-group-text">Fecha tarjeta</span>
        <input id="fecha_vencimiento" name="fecha_vencimiento" type="text" class="form-control" placeholder="Mes" aria-label="Mes">
        <span class="input-group-text">/</span>
        <input id="fecha_vencimiento" name="fecha_vencimiento" type="text" class="form-control" placeholder="Año" aria-label="Año">
    </div>

    <div class="">
        <input id="cvv" name="cvv" type="text" class="d-flex justify-content-center text-center" placeholder="CVV" aria-label="CVV"
            aria-describedby="basic-addon1">
    </div>
</x-modal>
