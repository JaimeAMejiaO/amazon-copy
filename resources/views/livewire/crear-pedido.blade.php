<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Continuar con el pedido</h1>
                <div class="">
                    <div class="row">
                        <div class="col-md-4">1</div>
                        <div class="col-md-4">Dirección de envío</div>
                        @if ($direccion)
                            <div class="col-md-4">{{ $direccion->nombre_completo }}<br>{{ $direccion->direccion }}<br>
                                {{ $direccion->especificacion_dir }}<br>
                                {{ $direccion->ciudad }}, {{ $direccion->departamento }}, {{ $direccion->cod_postal }}
                            </div>
                        @else
                            <div class="col-md-4">
                                <div>
                                    <p>No hay direcciones guardadas, debes tener una dirección creada para
                                        proceder con el pedido</p>

                                    <a href="{{ route('direcciones') }}" class="btn btn-primary">Agregar dirección</a>
                                </div>
                            </div>
                        @endif
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-md-4">2</div>
                        <div class="col-md-4">Metodo de pago</div>
                        @if ($metodo_pago)
                            <div class="col-md-4"><b>Pagando con
                                </b>{{ $metodo_pago->num_tarjeta }}<br>{{ $metodo_pago->nombre_tarjeta }}<br>
                                @if ($direccion)
                                    Dirección de la tarjeta {{ $direccion->direccion }}<br>
                                @else
                                    Dirección de la tarjeta no disponible<br>
                                    <a href="{{ route('direcciones') }}" class="btn btn-primary">Agregar dirección</a>
                                @endif
                            </div>
                        @else
                            <div class="col-md-4">
                                <div>
                                    <p>
                                        No hay metodos de pago guardados, debes tener un metodo de pago creado
                                        para proceder con el pedido
                                    </p>
                                    <a href="{{ route('metodos-pago') }}" class="btn btn-primary">Agregar
                                        metodo de pago</a>
                                </div>
                            </div>
                        @endif
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">3</div>
                        <div class="col-md-4">Productos del carrito</div>
                        <div class="row">
                            @foreach ($productos_carro as $producto)
                                <div class="col-md-4">{{ $producto->nombre }}<br>
                                    Precio c/u: ${{ $producto->precio }}<br>
                                </div>
                            @endforeach
                        </div>
                        @for ($i = 0; $i < $carro_usuario->count(); $i++)
                            <div class="col-md-4">Cantidad: {{ $carro_usuario[$i]->cant }}
                            </div>
                        @endfor
                    </div>
                    <hr>
                    <div class="d-flex justify-content-center">
                        @if ($direccion && $metodo_pago)
                            <div class="d-flex row justify-content-center">
                                <div class="col-md-12">
                                    <button class="btn btn-primary" wire:click="crearPedido">Realizar pedido</button>
                                </div>
                            </div>
                        @elseif (!$direccion)
                            <div class="d-flex row justify-content-center">
                                <div class="col-md-12">
                                    <p>No hay direcciones guardadas, debes tener una dirección creada para proceder con
                                        el pedido</p>
                                    <a href="{{ route('direcciones') }}" class="btn btn-primary">Agregar dirección</a>
                                </div>
                            </div>
                        @elseif (!$metodo_pago)
                            <div class="d-flex row justify-content-center">
                                <div class="col-md-12">
                                    <p>No hay metodos de pago guardados, debes tener un metodo de pago creado para
                                        proceder con el pedido</p>
                                    <a href="{{ route('metodos-pago') }}" class="btn btn-primary">Agregar metodo de
                                        pago</a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
