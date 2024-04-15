<x-modal title="Producto" type="store" id="modal_producto">
    {{-- El titulo tiene que ser variable ya que va a ser el mismo modal para edita y crear --}}
    <div style="text-align:center;">
        <h1>PRODUCTO AGREGADO EXITOSAMENTE</h1>
        <br>
    </div>
    <div class="d-flex "style="text-align:center;">
        <div class="col-4" style="">
            <img src="{{ asset('img/1.jpg') }}" class="" alt="..." width="150" height="150"
                style=" border-radius: 8px;border: 2px solid black;margin-bottom: 10px">
        </div>
        <div class="col-7" style="">
            <h2 style="text-align:center;">AIR JORDAN 11</h2>
            <h4>NIKE</h4>
        </div>
    </div>

</x-modal>
