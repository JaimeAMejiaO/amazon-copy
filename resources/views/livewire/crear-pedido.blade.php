<div>

    <div class="container mt-5">
        <div class="row">
            <!-- Detalles del Cliente -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        Detalles del Cliente
                    </div>
                    <div class="card-body">
                        <p></p>
                        <form>
                            <div>
                                <h1 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                                    style="font-size: 120%;font-weight:bold;text-align:center;margin-top:3%;margin-bottom:3%">
                                    Direccion de entrega</h1>
                            </div>
                            @if ($direccion)
                                <div class="form-group">
                                    <label for="company">Nombre de quien recibe</label>
                                    <input type="text" class="form-control" id="company"
                                        value="{{ $direccion->nombre_completo }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="address">Dirección</label>
                                    <input type="text" class="form-control" value="{{ $direccion->direccion }}"
                                        readonly>
                                </div>

                                <div class="form-group">
                                    <label for="address">Especificaciones direccion</label>
                                    <input type="text" class="form-control"
                                        value="{{ $direccion->especificacion_dir }}" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="address">Ciudad</label>
                                    <input type="text" class="form-control" value="{{ $direccion->ciudad }}"
                                        readonly>
                                </div>

                                <div class="form-group">
                                    <label for="address">Departamento</label>
                                    <input type="text" class="form-control" value="{{ $direccion->departamento }}"
                                        readonly>
                                </div>

                                <div class="form-group">
                                    <label for="address">Codigo postal</label>
                                    <input type="text" class="form-control" value="{{ $direccion->cod_postal }}"
                                        readonly>
                                </div>
                            @else
                                <div class="d-flex row justify-content-center">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-md-4 d-flex flex-column align-items-center">
                                                <div class="text-center">
                                                    <p>
                                                        No hay direcciones guardadas, debes tener una dirección creada
                                                        para
                                                        proceder con
                                                        el pedido
                                                    </p>
                                                    <a href="{{ route('direcciones') }}" class="btn btn-warning">Agregar
                                                        dirección</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div>
                                <h1 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                                    style="font-size: 120%;font-weight:bold;text-align:center;margin-top:3%;margin-bottom:3%">
                                    Metodo de pago</h1>
                            </div>
                            @if ($metodo_pago)
                                <div class="form-group">
                                    <label for="company">Numero de tarjeta</label>
                                    <input type="text" class="form-control" id="company"
                                        value="{{ $metodo_pago->num_tarjeta }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="address">Nombre del propietario</label>
                                    <input type="text" class="form-control"
                                        value="{{ $metodo_pago->nombre_tarjeta }}" readonly>
                                </div>
                                @if ($direccion)
                                    <div class="form-group">
                                        <label for="address">Direccion de la tarjeta</label>
                                        <input type="text" class="form-control" value="{{ $direccion->direccion }}"
                                            readonly>
                                    </div>
                                @else
                                    <div>
                                        Dirección de la tarjeta no disponible<br>
                                        <a href="{{ route('direcciones') }}" class="btn btn-primary">Agregar
                                            dirección</a>
                                    </div>
                                @endif
                            @else
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-4 d-flex flex-column align-items-center">
                                            <div class="text-center">
                                                <p>
                                                    No hay métodos de pago guardados, debes tener un método de pago
                                                    creado
                                                    para proceder con el pedido.
                                                </p>
                                                <a href="{{ route('metodo-pagos') }}" class="btn btn-warning">Agregar
                                                    método</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>

            <!-- Pedido Resumen -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        Pedido Resumen
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Descripción</th>
                                    <th>Cantidad</th>
                                    <th>Total</th>
                                </tr>
                            </thead>


                    </div>
                    @php
                        $i = 0;
                    @endphp
                    <tbody>
                        @foreach ($productos_carro as $producto)
                            
                            <tr>
                                <td>{{ $producto->nombre }}</td>
                                    <td>{{ $carro_usuario[$i]->cant }}</td>

                                <td>${{ $producto->precio }}</td>
                            </tr>


                            @php
                                $i++;
                            @endphp
                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <td><strong>Total</strong></td>
                            <td><strong>{{ $total_pedido}}</strong></td>
                        </tr>


                    </tfoot>
                    </table>
                    <div class="d-flex justify-content-center">
                        @if ($direccion && $metodo_pago)
                            <div class="d-flex row justify-content-center">
                                <div class="col-md-12">
                                    <button class="btn btn-warning" wire:click="crearPedido">Realizar pedido</button>
                                </div>
                            </div>
                        @elseif (!$direccion)
                            <div class="d-flex row justify-content-center">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-4 d-flex flex-column align-items-center">
                                            <div class="text-center">
                                                <p>
                                                    No hay direcciones guardadas, debes tener una dirección creada para
                                                    proceder con
                                                    el pedido
                                                </p>
                                                <a href="{{ route('direcciones') }}" class="btn btn-warning">Agregar
                                                    dirección</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @elseif (!$metodo_pago)
                            <div class="d-flex row justify-content-center">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-4 d-flex flex-column align-items-center">
                                            <div class="text-center">
                                                <p>
                                                    No hay métodos de pago guardados, debes tener un método de pago
                                                    creado
                                                    para proceder con el pedido.
                                                </p>
                                                <a href="{{ route('metodo-pagos') }}" class="btn btn-warning">Agregar
                                                    método</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
