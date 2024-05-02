<div style="background-color:#F2F2F2">
    <div style=" " class="d-flex">
        <div class="col" style="">
            <div class="d-flex" style="">
                <div class="col-3" style="margin-top:3%;margin-left:20%">
                    <img src="{{ asset('img/1.jpg') }}" class="" alt="..." width="110" height="110"
                        style=" border-radius: 8px;border: 2px solid black;margin-left:7%;margin-bottom: 5%;margin-top:5%">
                    <br>
                    <img src="{{ asset('img/2.webp') }}" class="" alt="..." width="110"
                        height="110"style=" border-radius: 8px;border: 2px solid black;margin-left:7%;margin-bottom: 5%;margin-top:5%">
                    <br>
                    <img src="{{ asset('img/3.jpeg') }}" class="" alt="..." width="110"
                        height="110"style="border-radius: 8px;border: 2px solid black;margin-left:7%;margin-bottom: 5%;margin-top:5%">

                </div>
                <div class="col" style="margin-top:3%;">
                    <div id="carouselExampleAutoplaying" class="carousel slide border-dark" data-bs-ride="carousel"
                        style="border: 2px solid black;">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('img/1.jpg') }}" class="d-block w-100" alt="..." width="450"
                                    height="370" style="">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/2.webp') }}" class="d-block w-100" alt="..."width="450"
                                    height="370">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/1.jpg') }}" class="d-block w-100" alt="..."width="450"
                                    height="370">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                            data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-3" style="margin-top:2%;">
            <h1 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                style="font-size: 240%;font-weight:bold;text-align:center">{{ $modelo_actual->nombre }}</h1>

            <h2 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                style="font-size: 200%;font-weight:bold;margin-left: 5%;"> {{ $modelo_actual->producto->marca->nombre }}
            </h2>

            <div style="margin-top:5%">
                <i class="fa-solid fa-star fa-2xl" style="color: #FFD43B;margin-left:4%"></i>
                <i class="fa-solid fa-star fa-2xl" style="color: #FFD43B;margin-left:-0.5%"></i>
                <i class="fa-solid fa-star fa-2xl" style="color: #FFD43B;margin-left:-0.5%"></i>
                <i class="fa-solid fa-star fa-2xl" style="color: #787878;margin-left:-0.5%"></i>
                <i class="fa-solid fa-star fa-2xl" style="color: #787878;margin-left:-0.5%"></i>
            </div>
            <h3 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                style="font-size: 200%;font-weight:bold;margin-left: 20px;margin-top:2%">$ {{ $modelo_actual->precio }}
            </h3>
            <h3 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                style="font-size: 150%;font-weight:bold;margin-left: 5%;">
                {{ $modelo_actual->producto->categoria->nombre }} </h3>
            <h3 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                style="font-size: 150%;font-weight:bold;margin-left: 5%;">Caracteristicas</h3>
            @foreach ($explode_array_cat as $titulo_caracteristica => $valor_caracteristica)
                <p></b>{{ $titulo_caracteristica }}:</b> {{ $valor_caracteristica }}</p>
            @endforeach
            <!--
                <p class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                style="font-size: 100%;font-weight:bold;margin-left: 10%;">COLORES:</p>
            <div style="margin-left: 10%;margin-bottom: 2%;">
                <i class="fa-solid fa-circle fa-2xl" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-circle fa-2xl" style="color: #f50505;"></i>
                <i class="fa-solid fa-circle fa-2xl" style="color: #05f52d;"></i>
            </div>
            <p class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                style="font-size: 100%;font-weight:bold;margin-left: 10%;">TALLAS:</p>
            <div class="col-2" style="margin-left: 10%;">
                <select class="form-select" aria-label="Default select example">
                    <option selected>9</option>
                    <option value="2">9.5</option>
                    <option value="3">10</option>
                    <option value="4">10.5</option>
                    <option value="4">11</option>
                    <option value="4">11.5</option>
                    <option value="4">12</option>
                    <option value="4">12.5</option>
                </select>
            </div>
        -->
            <div>
                @foreach ($producto_modelos as $producto_modelo)
                    <p>{{ $producto_modelo->nombre }}</p>
                @endforeach
            </div>

        </div>
        <div class="card mb-3"
            style="width: 18rem; border-radius: 8px;border: 2px solid black;margin-top:2%;margin-right:10%">
            <div class="card-body">

                <h3 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                    style="font-size: 200%;font-weight:bold;margin-left: 20px;margin-top:5%;margin-bottom:15%;text-align:center">
                    {{ $modelo_actual->precio }}$</h3>

                <div class="d-flex">
                    <div class="col-6"style="margin-top: 5px;">
                        <h4 class="">Cantidad disponible: {{ $modelo_actual->stock }} </h4>
                    </div>
                    <div class="col-4">
                        <select wire:model="cant_seleccionada" name="cant_seleccionada" id="cant_seleccionada">
                            @for ($i = 1; $i <= $modelo_actual->stock; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>

                </div>
                <br>
                <div style="text-align:center">

                    <br>
                    <br>
                    <br>
                    <div>
                        <button class="btn btn-outline-dark text-nowrap" wire:click="send_to_cart"
                            data-bs-toggle="modal" data-bs-target="#modal_producto">AGREGAR AL CARRO</button>
                    </div>
                    <br>
                    <div>
                        <a class="btn btn-outline-dark text-nowrap" href="{{ route('carro-compras') }}">Ver Carro</a>
                    </div>

                </div>
            </div>
        </div>

    </div>




    <div style="">
        <div style="margin-top:3%;margin-left:15%;margin-right:15%;background-color:#F2F2F2">

            <h3 class="card-title" style="text-align:center;">Descripción</h3>
            <p class="card-title" style="text-align:center"> {{ $modelo_actual->desc_prod }} </p>

        </div>
        <br>
        <br>
        <br>

        <h1 style="text-align:center">PREGUNTAS</h1>
        <div class="card"
            style="margin-left: 80px;margin-right: 80px;border-radius: 8px;border: 2px solid black;background-color:#F2F2F2">
            <div style="border-radius: 8px;border: 2px solid black;margin: 20px;">
                <div class="card-body; d-flex">
                    <div class="col-2" style="text-align:center;margin-top: 20px;">
                        <p
                            style="border-radius: 8px;border: 2px solid black; margin-left: 20px;background-color:#FFD43B">
                            JAIME
                            ANDRES MEJIA
                        </p>
                    </div>
                    <p class="col;" style="margin-left: 20px;margin-top: 20px;">Lorem ipsum dolor sit amet,
                        consectetur adipiscing
                        elit. Morbi mollis massa augue, ut lobortis odio volutpat tincidunt. Aenean hendrerit at mi
                        ultrices
                        faucibus. Phasellus consectetur mattis metus, at pulvinar sem interdum a. Aenean pulvinar orci
                        et
                        est auctor blandit. Phasellus a viverra enim, vitae rhoncus nibh. Maecenas maximus accumsan
                        posuere.
                        Donec eget tellus orci. Suspendisse dignissim, mauris vitae pharetra congue, lacus nunc
                        elementum
                        lacus, id lobortis ante tortor vel diam. Aliquam erat volutpat. Donec rutrum </p>

                </div>
                <div class="card-body; d-flex">
                    <div class="col-2" style="text-align:center">
                        <p
                            style="border-radius: 8px;border: 2px solid black; margin-left: 20px;background-color:#FFD43B">
                            RESPUESTA VENDEDOR
                        </p>
                    </div>
                    <p class="col;" style="margin-left: 20px;">Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Morbi mollis massa augue, ut lobortis odio volutpat tincidunt. Aenean hendrerit at mi
                        ultrices
                        faucibus. Phasellus consectetur mattis metus, at pulvinar sem interdum a. Aenean pulvinar orci
                        et
                        est auctor blandit. Phasellus a viverra enim, vitae rhoncus nibh. Maecenas maximus accumsan
                        posuere.
                        Donec eget tellus orci. Suspendisse dignissim, mauris vitae pharetra congue, lacus nunc
                        elementum
                        lacus, id lobortis ante tortor vel diam. Aliquam erat volutpat. Donec rutrum </p>
                </div>
            </div>
            <div style="border-radius: 8px;border: 2px solid black;margin: 20px;">
                <div class="card-body; d-flex">
                    <div class="col-2" style="text-align:center;margin-top: 20px;">
                        <p
                            style="border-radius: 8px;border: 2px solid black; margin-left: 20px;background-color:#FFD43B">
                            JULIAN STEVAN DAZA
                        </p>
                    </div>
                    <p class="col;" style="margin-left: 20px;margin-top: 20px;">Lorem ipsum dolor sit amet,
                        consectetur adipiscing
                        elit. Morbi mollis massa augue, ut lobortis odio volutpat tincidunt. Aenean hendrerit at mi
                        ultrices
                        faucibus. Phasellus consectetur mattis metus, at pulvinar sem interdum a. Aenean pulvinar orci
                        et
                        est auctor blandit. Phasellus a viverra enim, vitae rhoncus nibh. Maecenas maximus accumsan
                        posuere.
                        Donec eget tellus orci. Suspendisse dignissim, mauris vitae pharetra congue, lacus nunc
                        elementum
                        lacus, id lobortis ante tortor vel diam. Aliquam erat volutpat. Donec rutrum </p>

                </div>
                <div class="card-body; d-flex">
                    <div class="col-2" style="text-align:center">
                        <p
                            style="border-radius: 8px;border: 2px solid black; margin-left: 20px;background-color:#FFD43B">
                            RESPUESTA VENDEDOR
                        </p>
                    </div>
                    <p class="col;" style="margin-left: 20px;">Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Morbi mollis massa augue, ut lobortis odio volutpat tincidunt. Aenean hendrerit at mi
                        ultrices
                        faucibus. Phasellus consectetur mattis metus, at pulvinar sem interdum a. Aenean pulvinar orci
                        et
                        est auctor blandit. Phasellus a viverra enim, vitae rhoncus nibh. Maecenas maximus accumsan
                        posuere.
                        Donec eget tellus orci. Suspendisse dignissim, mauris vitae pharetra congue, lacus nunc
                        elementum
                        lacus, id lobortis ante tortor vel diam. Aliquam erat volutpat. Donec rutrum </p>
                </div>
            </div>
        </div>
    </div>

    <div style="">
        <br>
        <br>
        <br>
        <br>

        <h1 style="text-align:center">OPINIONES</h1>
        <div class="card" style="margin-left: 80px;margin-right: 80px;border-radius: 8px;border: 2px solid black;">
            <div style="border-radius: 8px;border: 2px solid black;margin: 20px;">
                <div class="card-body;">
                    <div class="d-flex" style="text-align:center;margin-top: 20px;">
                        <div class="col-2" style="">
                            <p
                                style="border-radius: 8px;border: 2px solid black; margin-left: 5%;background-color:#FFD43B">
                                JAIME
                                ANDRES MEJIA
                            </p>
                        </div>

                        <div style="">
                            <i class="fa-solid fa-star fa-xl" style="color: #FFD43B;margin-left:1%"></i>
                            <i class="fa-solid fa-star fa-xl" style="color: #FFD43B;margin-left:-1%"></i>
                            <i class="fa-solid fa-star fa-xl" style="color: #FFD43B;margin-left:-1%"></i>
                            <i class="fa-solid fa-star fa-xl" style="color: #787878;margin-left:-1%"></i>
                            <i class="fa-solid fa-star fa-xl" style="color: #787878;margin-left:-1%"></i>
                        </div>
                    </div>

                    <p class="col;" style="margin-left: 20px;margin-top: 5px;">Lorem ipsum dolor sit amet,
                        consectetur adipiscing
                        elit. Morbi mollis massa augue, ut lobortis odio volutpat tincidunt. Aenean hendrerit at mi
                        ultrices
                        faucibus. Phasellus consectetur mattis metus, at pulvinar sem interdum a. Aenean pulvinar orci
                        et
                        est auctor blandit. Phasellus a viverra enim, vitae rhoncus nibh. Maecenas maximus accumsan
                        posuere.
                        Donec eget tellus orci. Suspendisse dignissim, mauris vitae pharetra congue, lacus nunc
                        elementum
                        lacus, id lobortis ante tortor vel diam. Aliquam erat volutpat. Donec rutrum </p>

                </div>

            </div>

        </div>
    </div>
    @include('livewire.ver-productos.modal_ver-productos')
</div>
