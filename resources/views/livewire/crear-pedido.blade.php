<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Continuar con el pedido</h1>
                <div class="">
                    <div class="row">
                        <div class="col-md-4">1</div>
                        <div class="col-md-4">Dirección de envío</div>
                        <div class="col-md-4">{{ $direccion->nombre_completo }}<br>{{ $direccion->direccion }}<br>
                            {{ $direccion->especificacion_dir }}<br>
                            {{ $direccion->ciudad }}, {{ $direccion->departamento }}, {{ $direccion->cod_postal }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">2</div>
                        <div class="col-md-4">Metodo de pago</div>
                        <div class="col-md-4"><b>Pagando con
                            </b>{{ $metodo_pago->num_tarjeta }}<br>{{ $metodo_pago->nombre_tarjeta }}<br>
                            Dirección de la tarjeta {{ $direccion->direccion }}<br>
                        </div>
                    </div>
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
                </div>

            </div>
