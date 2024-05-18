<div>
    <div class="d-flex justify-content-center">
        <div class="justify-content-center">
            <h1>Pedidos</h1>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID </th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Productos</th>
                            <th scope="col">Total</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pedidos as $pedido)
                            <tr>
                                <th scope="row">{{ $pedido->id }}</th>
                                <td>{{ $pedido->created_at }}</td>
                                <td>
                                    @foreach ($pedido->productos as $producto)
                                        <p>{{ $producto->nombre }}</p>
                                        <br>
                                    @endforeach
                                <td>${{ $pedido->costo_pedido }}</td>
                                @if ($pedido->success == 0)
                                    <td>En espera</td>
                                @elseif ($pedido->success == 1)
                                    <td>Enviado</td>
                                @elseif ($pedido->success == 2)
                                    <td>Entregado</td>
                                @endif
                                <td>
                                    <p>Pedir reembolso, garantia</p>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
