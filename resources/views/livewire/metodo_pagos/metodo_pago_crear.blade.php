<x-modal title="Agregar Tarjeta" type="store" id="crear_tarjeta">
    <div class="input-group mb-3">
        <input id="nombre_tarjeta" name="nombre_tarjeta" type="text" class="form-control" placeholder="Nombre Tarjeta"
            aria-label="Nombre Tarjeta" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        <input id="num_tarjeta" name="num_tarjeta" type="text" class="form-control" placeholder="Numero Tarjeta"
            aria-label="Numero Tarjeta" aria-describedby="basic-addon1">
    </div>




    <div class="input-group mb-3">
        <span class="input-group-text">Fecha tarjeta</span>
        <div class="col-2" style="margin-left: 10%;">
            <select class="form-select" aria-label="Default select example">
                <option selected>01</option>
                <option>02</option>
                <option>03</option>
                <option>04</option>
                <option>05</option>
                <option>06</option>
                <option>07</option>
                <option>08</option>
                <option>09</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
            </select>
        </div>
        <span class="input-group-text">/</span>
        <div class="col-2" style="">
            <select class="form-select" aria-label="Default select example">
                <option selected></option>
                <option>02</option>
                <option>03</option>
                <option>04</option>
                <option>05</option>
                <option>06</option>
                <option>07</option>
                <option>08</option>
                <option>09</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
            </select>
        </div>
    </div>

    <div class="">
        <input id="cvv" name="cvv" type="text" class="d-flex justify-content-center text-center"
            placeholder="CVV" aria-label="CVV" aria-describedby="basic-addon1">
    </div>

</x-modal>
