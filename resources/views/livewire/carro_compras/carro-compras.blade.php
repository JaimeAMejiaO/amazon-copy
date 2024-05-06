<div style="">
    <div class="d-flex" style="margin-top:5%;">
        <div class="card col-9"
            style="margin-left: 4%;margin-right: 10px;border-radius: 8px;border: 2px solid black;background-color:#F2F2F2">
            <h1 style="text-align:center">Carrito de compras</h1>
            <div style="border-radius: 8px;border: 2px solid black;margin: 20px;margin-bottom: 80px; ">

                @if ($array_productos->count() == 0)
                    <h2 style="text-align:center">No hay productos en el carrito</h2>
                @else
                    @foreach ($array_productos as $producto_modelo)
                        <div class="d-flex" style="">
                            <div class="col-1 " style="">
                                <div class="" style="display:flex;justify-content:center;margin-top: 80px;">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="flexCheckDefault">
                                </div>
                            </div>
                            <div class="d-flex col-6" style="text-align:center;margin-top: 20px;">
                                <div class="col-5" style="">
                                    <img src="{{ asset('img/1.jpg') }}" class="" alt="..." width="150"
                                        height="150"
                                        style=" border-radius: 8px;border: 2px solid black;margin-bottom: 10px">
                                </div>
                                <div class="col-11" style="">
                                    <div class="" style="background-color:#F2F2F2">
                                        <h2 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                                            style="font-size: 200%;font-weight:bold;text-align:center">
                                            {{ $producto_modelo->producto_modelo->nombre }} </h2>
                                        <br>
                                        <p class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                                            style="font-size: 75%;font-weight:bold;text-align:center">
                                            {{ $producto_modelo->producto_modelo->desc_prod }} </p>
                                    </div>
                                    <div class="" style="margin-top: 50px;">
                                        <div class="d-flex" style="">
                                            <div class="col-3"style="margin-top: 5px;">

                                                <h2 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                                                    style="font-size: 150%;font-weight:bold;text-align:center">Cantidad:
                                                </h2>
                                            </div>
                                            <div class="col-2 d-flex justify-content-between me-4">
                                                <button wire:click="disminuirCantidad({{$producto_modelo->id}})">-</button>
                                                <input type="number" class="form-control" id="exampleFormControlInput1"
                                                    placeholder="1" value="{{$producto_modelo->cant}}" readonly>
                                                <button wire:click="aumentarCantidad({{$producto_modelo->id}})">+</button>
                                            </div>
                                            <div>
                                                <button class="btn btn-outline-danger text-nowrap" type="submit"
                                                    wire:click="delete({{ $producto_modelo->id }})">Eliminar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6" style=" margin-top: 50px;">
                                    <h2 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                                        style="font-size: 200%;font-weight:bold;text-align:center">
                                        {{ $producto_modelo->producto_modelo->precio * $producto_modelo->cant }} $</h2>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>

        <div class="col-3" style="width: 18rem; border-radius: 8px;border: 2px solid black;background-color:#F2F2F2">
            <div class="card-body">
                <br>
                <br>
                <h2 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                    style="font-size: 200%;font-weight:bold;text-align:center">PRODUCTO</h2>
                <h2 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                    style="font-size: 200%;font-weight:bold;text-align:center">{{$valor_total}}$</h2>
                <br>
                <br>

                <br>
                <div style="text-align:center">
                    <br>
                    <br>
                    <br>

                    <div>
                        <a class="btn btn-outline-dark text-nowrap" wire:click="hacer_pedido">Proceder al pedido</a>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
