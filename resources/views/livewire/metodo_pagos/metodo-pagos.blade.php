<div>
    <div class="container">
        @if ($metodos_pago->count() > 0)
            <h1>Métodos de Pago</h1>
            <ul>
                @foreach ($metodos_pago as $metodoPago)
                    <li>
                        <p>Numero de tarjeta: {{ $metodoPago->num_tarjeta }}</p>
                        <p>Nombre de tarjeta: {{ $metodoPago->nombre_tarjeta }}</p>
                        <p>Fecha de vencimiento: {{ $metodoPago->fecha_vencimiento }}</p>
                        <p>Fecha de vencimiento: {{ $metodoPago->cvv }}</p>
                        <x-primary-button data-bs-toggle="modal" data-bs-target="#editar_tarjeta">
                            {{ 'Edit' }}
                        </x-primary-button>
                        <form action="{{ route('metodo-pago.destroy', $metodoPago->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Borrar</button>
                        </form>
                    </li>
                @endforeach
            </ul>
        @else
            <p>No hay métodos de pago creados.</p>
        @endif
        <x-primary-button data-bs-toggle="modal" data-bs-target="#crear_tarjeta">
            {{ 'Create' }}
        </x-primary-button>
    </div>
    @include('livewire.metodo_pagos.metodo_pago_editar')
    @include('livewire.metodo_pagos.metodo_pago_crear')
</div>