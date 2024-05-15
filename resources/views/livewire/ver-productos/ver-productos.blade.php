<div style="background-color:#F2F2F2">
    <div style=" " class="d-flex">
        <div class="col" style="">
            <div class="d-flex" style="margin-top:5%;margin-left:15%;">
                <div class="col-3  align-items-center">
                    <!-- Cambiado a flex-column y align-items-center para centrar verticalmente -->

                    @if ($id_producto_modelo->id == 1)
                        <img src="{{ asset('img/15promax.jpg') }}" class="img-thumbnail mb-1" alt="..." width="110"
                        height="110">>
                    @elseif ($id_producto_modelo->id == 3)
                        <img src="{{ asset('img/tecnologia.jpeg') }}" class="img-thumbnail mb-1" alt="..." width="110"
                        height="110">>
                    @elseif ($id_producto_modelo->id == 4)
                        <img src="{{ asset('img/juguetes.webp') }}" class="img-thumbnail mb-1" alt="..." width="110"
                        height="110">>
                    @elseif ($id_producto_modelo->id == 5)
                        <img src="{{ asset('img/j10.jpeg') }}" class="img-thumbnail mb-1" alt="..." width="110"
                        height="110">>
                    @elseif ($id_producto_modelo->id == 6)
                        <img src="{{ asset('img/acer.jpeg') }}" class="img-thumbnail mb-1" alt="..." width="110"
                        height="110">>
                    @elseif ($id_producto_modelo->id == 7)
                        <img src="{{ asset('img/11.jpeg') }}" class="img-thumbnail mb-1" alt="..." width="110"
                        height="110">>
                    @elseif ($id_producto_modelo->id == 8)
                        <img src="{{ asset('img/adidascamisa.webp') }}" class="img-thumbnail mb-1" alt="..." width="110"
                        height="110">>
                    @elseif ($id_producto_modelo->id == 9)
                        <img src="{{ asset('img/alien.webp') }}" cclass="img-thumbnail mb-1" alt="..." width="110"
                        height="110">>
                    @elseif ($id_producto_modelo->id == 10)
                        <img src="{{ asset('img/cocina.webp') }}" class="img-thumbnail mb-1" alt="..." width="110"
                        height="110">
                    @endif

                </div>
                <div class="col-7" style="">
                    <div id="carouselExampleAutoplaying" class="carousel slide border border-dark rounded"
                        data-bs-ride="carousel" style="max-width: 400px;">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('img/1.jpg') }}" class="d-block w-100" alt="..."
                                    style="height: 425px;width:425px;">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/2.webp') }}" class="d-block w-100" alt="..."
                                    style="height: 425px;">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/1.jpg') }}" class="d-block w-100" alt="..."
                                    style="height: 425px;">
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
        <div class="col-4" style="margin-top:2%;">
            <h1 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                style="font-size: 240%;font-weight:bold;text-align:center">{{ $id_producto_modelo->nombre }}</h1>

            <div style="margin-top:5%">
                <i class="fa-solid fa-star fa-2xl" style="color: #FFD43B;margin-left:4%"></i>
                <i class="fa-solid fa-star fa-2xl" style="color: #FFD43B;margin-left:-0.5%"></i>
                <i class="fa-solid fa-star fa-2xl" style="color: #FFD43B;margin-left:-0.5%"></i>
                <i class="fa-solid fa-star fa-2xl" style="color: #787878;margin-left:-0.5%"></i>
                <i class="fa-solid fa-star fa-2xl" style="color: #787878;margin-left:-0.5%"></i>
            </div>
            <h3 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                style="font-size: 200%;font-weight:bold;margin-left: 20px;margin-top:2%">$
                {{ $id_producto_modelo->precio }}
            </h3>
            <h2 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                style="font-size: 200%;font-weight:bold;margin-left: 5%;">
                {{ $id_producto_modelo->producto->marca->nombre }}
            </h2>
            <h3 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                style="font-size: 150%;font-weight:bold;margin-left: 5%;">
                {{ $id_producto_modelo->producto->categoria->nombre }} </h3>

            @foreach ($producto_modelos as $producto_modelo)
                <h3 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                    style="font-size: 150%;font-weight:bold;margin-left: 5%;">{{ $producto_modelo->nombre }}</h3>
            @endforeach

            <div class="container" style="">
                <div class="text-center"> <!-- Centrar el texto "Características" -->
                    <h3 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                        style="font-size: 150%;font-weight:bold;">Caracteristicas</h3>
                </div>
                <div class="">
                    <div style="">
                        @foreach ($explode_array_cat as $titulo_caracteristica => $valor_caracteristica)
                            @if ($titulo_caracteristica == 'Color')
                                <div>
                                    <p class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                                        style="font-size: 100%;font-weight:bold;margin-left: 5%;margin-top: 2%;">
                                        COLORES:</p>
                                    <div style="margin-left: 5%;">
                                        @foreach ($colores as $color => $valor)
                                            <a href="#"
                                                wire:click="seleccionar_color('{{ $color }}')"><i
                                                    class="fa-solid fa-circle{{ $valor ? '-check' : '' }} fa-2xl"
                                                    style="color: {{ $color }};"></i></a>
                                        @endforeach
                                    </div>
                                </div>
                            @elseif ($titulo_caracteristica == 'Talla')
                                <div style="">

                                    <div class="col"style="">
                                        <p class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                                            style="font-size: 150%;font-weight:bold;margin-left: 5%;margin-top: 2%;">
                                            Tallas:</p>
                                    </div>
                                    <div class="" style="margin-left: 5%;">
                                        <select wire:model.live="talla_seleccionada" name="talla_seleccionada"
                                            id="talla_seleccionada"
                                            style="padding: 8px; font-size: 16px; border: 1px solid #ccc; border-radius: 4px;">
                                            @foreach ($tallas as $talla)
                                                <option value="{{ $talla }}">{{ $talla }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                            @elseif ($titulo_caracteristica == 'Almacenamiento')
                                <div>
                                    <p class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                                        style="font-size: 100%;font-weight:bold;margin-left: 5%;margin-top: 2%;">
                                        ALMACENAMIENTO:</p>
                                    <div class="d-flex"style="margin-left: 5%;">
                                        @foreach ($almacenamiento as $key => $value)
                                            <a href="#"style="text-decoration: none"
                                                class="col-md-4 mx-1 "wire:click="seleccionar_almacenamiento('{{ $key }}')">
                                                <div class="card {{ $value ? 'border border-dark' : '' }}">
                                                    <div class="card-body text-center">
                                                        <h5 class="card-title">{{ $key }}</h5>
                                                    </div>
                                                </div>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            @else
                                <p class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                                    style="font-size: 150%;;margin-left: 5%;margin-top: 2%;">
                                    <b>{{ $titulo_caracteristica }}:</b> {{ $valor_caracteristica }}
                                </p>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>





        </div>
        <div class="col-1 card mb-3"
            style="width: 18rem; border-radius: 8px;border: 2px solid black;margin-top:2%;margin-right:5%;margin-left:2%">
            <div class="card-body">
                <h3 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                    style="font-size: 200%;font-weight:bold;margin-left: 20px;margin-top:5%;margin-bottom:15%;text-align:center">
                    {{ $id_producto_modelo->precio }}$</h3>
                <div class="">
                    <div class=""style="margin-top: 5px;">
                        <h4 class="">Cantidad disponible: {{ $id_producto_modelo->stock }} </h4>
                    </div>
                    <br>
                    <br>
                    <div class="d-flex align-items-center">
                        <div style="margin-top: 5px;">
                            <h4 class="">Cantidad: </h4>
                        </div>
                        <select wire:model="cant_seleccionada" name="cant_seleccionada" id="cant_seleccionada"
                            class="form-control form-control-sm" style="width: 70px;">
                            @for ($i = 1; $i <= $id_producto_modelo->stock; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                        @error('cant_seleccionada')
                            <div class="alert alert-danger mt-2" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                </div>
                <br>
                <div style="text-align:center">
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
        <div style="margin-top:1%;margin-left:15%;margin-right:15%;background-color:#F2F2F2">
            <h3 class="card-title" style="text-align:center;">Descripción</h3>
            <p class="card-title" style="text-align:center"> {{ $id_producto_modelo->desc_prod }} </p>
        </div>
        <br>
        <br>
        <br>
        <h1 style="text-align:center">PREGUNTAS</h1>
        <div class="card mx-5"
            style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);;overflow-y: auto; max-height: 300px;">
            <div class="card-body" style=""> <!-- Añadido overflow-y: auto y max-height para el scroll -->
                <div class="row">
                    <div class="col-2 text-center">
                        <div class="rounded-pill px-3 py-1" style="border: 1px solid black;">
                            JAIME ANDRES MEJIA
                        </div>

                    </div>
                    <div class="col">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi mollis massa augue, ut
                            lobortis odio volutpat tincidunt. Aenean hendrerit at mi ultrices faucibus. Phasellus
                            consectetur mattis metus, at pulvinar sem interdum a. Aenean pulvinar orci et est auctor
                            blandit. Phasellus a viverra enim, vitae rhoncus nibh. Maecenas maximus accumsan posuere.
                            Donec eget tellus orci. Suspendisse dignissim, mauris vitae pharetra congue, lacus nunc
                            elementum lacus, id lobortis ante tortor vel diam. Aliquam erat volutpat. Donec rutrum</p>
                    </div>
                </div>
                <div class="d-flex align-items-center"> <!-- Añadido align-items-center para centrar verticalmente -->
                    <div class="col text-center"style="margin-left:15%;margin-right:1%">
                        <!-- Añadido align-items-center para centrar verticalmente -->
                        <div class="rounded-pill px-2 " style="border: 1px solid black;">
                            RESPUESTA
                        </div>
                    </div>
                    <div class="col-9">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi mollis massa augue, ut
                            lobortis odio volutpat tincidunt. Aenean hendrerit at mi ultrices faucibus. Pha</p>
                    </div>
                </div>


            </div>




            <div class="card-body" style=""> <!-- Añadido overflow-y: auto y max-height para el scroll -->
                <div class="row">
                    <div class="col-2 text-center">
                        <div class="rounded-pill px-3 py-1" style=" border: 1px solid black;">
                            JULIAN STEVAN DAZA
                        </div>
                    </div>
                    <div class="col">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi mollis massa augue, ut
                            lobortis odio volutpat tincidunt. Aenean hendrerit at mi ultrices faucibus. Phasellus
                            consectetur mattis metus, at pulvinar sem interdum a. Aenean pulvinar orci et est auctor
                            blandit. Phasellus </p>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div style="">
        <br>
        <br>

        <h1 style="text-align:center">OPINIONES</h1>
        <div class="card mx-5"
            style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);;overflow-y: auto; max-height: 200px;">
            <div style="">
                <div class="card-body;">
                    <div class="d-flex" style="text-align:center;margin-top: 20px;">
                        <div class="col-2" style="">
                            <p style="border-radius: 8px;border: 2px solid black; margin-left: 5%;">
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



            <div style="">
                <div class="card-body;">
                    <div class="d-flex" style="text-align:center;margin-top: 20px;">
                        <div class="col-2" style="">
                            <p style="border-radius: 8px;border: 2px solid black; margin-left: 5%;">
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


            <div style="">
                <div class="card-body;">
                    <div class="d-flex" style="text-align:center;margin-top: 20px;">
                        <div class="col-2" style="">
                            <p style="border-radius: 8px;border: 2px solid black; margin-left: 5%;">
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


            <div style="">
                <div class="card-body;">
                    <div class="d-flex" style="text-align:center;margin-top: 20px;">
                        <div class="col-2" style="">
                            <p style="border-radius: 8px;border: 2px solid black; margin-left: 5%;">
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


        <div class="container my-5">
            <h4 class="mb-4">Los clientes que vieron este producto también vieron</h4>
            <div class="row row-cols-1 row-cols-md-6 g-4">
                <!-- Producto 1 -->
                <div class="col">
                    <a href="#">
                        <div class="card h-100">
                            <img src="{{ asset('img/j9.jpeg') }}" class="card-img-top" alt="...">
                            <h4 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                                style="font-size: 100%;font-weight:bold;margin:5%"> Jordan Air Jordan 9 Botas para
                                hombre
                            </h4>
                        </div>
                    </a>
                </div>

                <div class="col">
                    <a href="#">
                        <div class="card h-100">
                            <img src="{{ asset('img/j9.jpeg') }}" class="card-img-top" alt="...">
                            <h4 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                                style="font-size: 100%;font-weight:bold;margin:5%"> Jordan Air Jordan 9 Botas para
                                hombre
                            </h4>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        <div class="card h-100">
                            <img src="{{ asset('img/j9.jpeg') }}" class="card-img-top" alt="...">
                            <h4 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                                style="font-size: 100%;font-weight:bold;margin:5%"> Jordan Air Jordan 9 Botas para
                                hombre
                            </h4>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        <div class="card h-100">
                            <img src="{{ asset('img/j9.jpeg') }}" class="card-img-top" alt="...">
                            <h4 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                                style="font-size: 100%;font-weight:bold;margin:5%"> Jordan Air Jordan 9 Botas para
                                hombre
                            </h4>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        <div class="card h-100">
                            <img src="{{ asset('img/j9.jpeg') }}" class="card-img-top" alt="...">
                            <h4 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                                style="font-size: 100%;font-weight:bold;margin:5%"> Jordan Air Jordan 9 Botas para
                                hombre
                            </h4>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        <div class="card h-100">
                            <img src="{{ asset('img/j9.jpeg') }}" class="card-img-top" alt="...">
                            <h4 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                                style="font-size: 100%;font-weight:bold;margin:5%"> Jordan Air Jordan 9 Botas para
                                hombre
                            </h4>
                        </div>
                    </a>
                </div>
            </div>
            <div style="text-align: center;">
                <button class="btn btn-warning" wire:click="redirect_nuevo_modelo()">Crear nuevo modelo</button>
            </div>

        </div>
    </div>
    @include('livewire.ver-productos.modal_ver-productos')
</div>
