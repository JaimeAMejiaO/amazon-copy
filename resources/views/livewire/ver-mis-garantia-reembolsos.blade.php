<div>
    @if (Auth::check())

        <div style="margin-top:2%">
            <h3 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                style="font-size: 400%;font-weight:bold;margin-left: 20px;text-align:center">Lista de Garantias y
                Reembolsos
            </h3>
        </div>
        <div class="container mt-5">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tipo de petición</th>
                        <th>Pedido</th>
                        <th>Producto</th>
                        <th>Motivo</th>
                        <th>Imagen</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($garantias_reembolsos as $garantia_reembolso)
                        <tr>
                            <th>{{ $garantia_reembolso->referencia }}</th>
                            <th>{{ $garantia_reembolso->tipo_peticion }}</th>
                            <td>{{ $garantia_reembolso->pedido->id }}</td>
                            <td>{{ $garantia_reembolso->producto_seleccionado }}</td>
                            <td>{{ $garantia_reembolso->motivo }}</td>
                            <td><img src="{{ $garantia_reembolso->img }}" alt="Imagen de la garantía o reembolso"></td>
                            <td>{{ $garantia_reembolso->created_at }}</td>
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
