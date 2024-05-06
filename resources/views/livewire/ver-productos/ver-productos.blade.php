<div style="background-color:#F2F2F2">
    <div style=" " class="d-flex">
        <div class="col" style="">
            <div class="d-flex" style="margin-top:5%;margin-left:10%;">
                <div class="col-2 d-flex flex-column align-items-center">
                    <!-- Cambiado a flex-column y align-items-center para centrar verticalmente -->
                    <img src="{{ asset('img/1.jpg') }}" class="img-thumbnail mb-1" alt="..." width="110"
                        height="110"> <!-- Añadida la clase img-thumbnail para bordes redondeados y sombra -->
                    <img src="{{ asset('img/2.webp') }}" class="img-thumbnail mb-1" alt="..." width="110"
                        height="110"> <!-- Añadida la clase img-thumbnail para bordes redondeados y sombra -->
                    <img src="{{ asset('img/3.jpeg') }}" class="img-thumbnail mb-1" alt="..." width="110"
                        height="110"> <!-- Añadida la clase img-thumbnail para bordes redondeados y sombra -->
                    <img src="{{ asset('img/1.jpg') }}" class="img-thumbnail mb-1" alt="..." width="110"
                        height="110"> <!-- Añadida la clase img-thumbnail para bordes redondeados y sombra -->
                    <img src="{{ asset('img/2.webp') }}" class="img-thumbnail mb-1" alt="..." width="110"
                        height="110"> <!-- Añadida la clase img-thumbnail para bordes redondeados y sombra -->
                </div>
                <div class="col-7 d-flex justify-content-center" style="">
                    <div id="carouselExampleAutoplaying" class="carousel slide border border-dark rounded"
                        data-bs-ride="carousel" style="max-width: 400px;">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('img/1.jpg') }}" class="d-block w-100" alt="..."
                                    style="height: 425px;">
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
        <div class="col-2" style="margin-top:2%;">
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
            <div>
                
                <button wire:click="redirect_nuevo_modelo()">Crear nuevo modelo</button>
                
            </div>




        </div>
        <div class="card mb-3 col-2"
            style="width: 18rem; border-radius: 8px;border: 2px solid black;margin-top:2%;margin-right:10%">
            <div class="card-body">
                <h3 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                    style="font-size: 200%;font-weight:bold;margin-left: 20px;margin-top:5%;margin-bottom:15%;text-align:center">
                    {{ $id_producto_modelo->precio }}$</h3>
                <div class="d-flex">
                    <div class="col-6"style="margin-top: 5px;">
                        <h4 class="">Cantidad disponible: {{ $id_producto_modelo->stock }} </h4>
                    </div>
                    <div class="col-4">
                        <select wire:model="cant_seleccionada" name="cant_seleccionada" id="cant_seleccionada">
                            @for ($i = 1; $i <= $id_producto_modelo->stock; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                            @error('cant_seleccionada')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
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
    <br>

    <div class="container" style="">
        <div class="text-center"> <!-- Centrar el texto "Características" -->
            <h3 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                style="font-size: 150%;font-weight:bold;">Caracteristicas</h3>
        </div>
        <div class="row gx-4"> <!-- Reducir el espacio entre las columnas -->
            <div class="col-md-6">
                <div style="margin-left:80%">
                    @foreach ($explode_array_cat as $titulo_caracteristica => $valor_caracteristica)
                        @if ($loop->index % 2 == 0)
                            <p><b>{{ $titulo_caracteristica }}:</b> {{ $valor_caracteristica }}</p>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="col-md-6">
                <div>
                    @foreach ($explode_array_cat as $titulo_caracteristica => $valor_caracteristica)
                        @if ($loop->index % 2 != 0)
                            <p><b>{{ $titulo_caracteristica }}:</b> {{ $valor_caracteristica }}</p>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>


    <div style="">
        <div style="margin-top:3%;margin-left:15%;margin-right:15%;background-color:#F2F2F2">
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
        </div>
    </div>
    @include('livewire.ver-productos.modal_ver-productos')
</div>
