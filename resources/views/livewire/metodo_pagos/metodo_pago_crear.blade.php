<x-modal title="crear" type="store" id="crear_tarjeta" function="store">
    <div class="form-group">
        <label for="num_tarjeta">Numero de tarjeta</label>
        <input type="text" class="form-control" id="num_tarjeta" wire:model="num_tarjeta">
    </div>
    <div class="form-group">
        <label for="nombre_tarjeta">Nombre de tarjeta</label>
        <input type="text" class="form-control" id="nombre_tarjeta" wire:model="nombre_tarjeta">
    </div>
    <div class="form-group">
        <label for="fecha_vencimiento">Fecha de vencimiento</label>
        <input type="text" class="form-control" id="fecha_vencimiento" wire:model="fecha_vencimiento">
    </div>
    <div class="form-group">
        <label for="cvv">CVV</label>
        <input type="text" class="form-control" id="cvv" wire:model="cvv">
    </div>
</x-modal>