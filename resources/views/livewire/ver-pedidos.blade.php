<div>
    @if (Auth::check())

        <div style="margin-top:2%">
            <h3 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                style="font-size: 400%;font-weight:bold;margin-left: 20px;text-align:center">Lista Pedidos
            </h3>
        </div>


        <div class="container mt-5">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>FECHA</th>
                        <th>PRODUCTOS</th>
                        <th>TOTAL</th>
                        <th>ESTADO</th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pedidos as $pedido)
                        <tr>
                            <th>{{ $pedido->id }}</th>
                            <td>{{ $pedido->created_at }}</td>
                            <td>
                                @foreach ($pedido->productos as $producto)
                                    <p>{{ $producto->nombre }}</p>
                                @endforeach
                            </td>
                            <td>${{ $pedido->costo_pedido }}</td>
                            @if ($pedido->success == 0)
                                <td>En espera</td>
                            @elseif ($pedido->success == 1)
                                <td>Enviado</td>
                            @elseif ($pedido->success == 2)
                                <td>Entregado</td>
                            @endif
                            <td>
                                <a href="#" class="btn btn-success btn-sm"><i
                                        class="fa-solid fa-money-bill fa-2xl"></i></a>
                                <a href="#" class="btn btn-warning btn-sm"><i
                                        class="fa-solid fa-truck-fast fa-2xl"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="d-flex justify-content-center align-items-center" style="height:100%;">
            <h1>Debes iniciar sesion</h1>
        </div>
    @endif
</div>
