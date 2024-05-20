<div style="background-color:#F2F2F2">
    <div style=" " class="d-flex">
        <div class="col" style="">
            <div class="d-flex" style="margin-top:5%;margin-left:5%;">
                <div class="col-2  align-items-center" style="">
                    <!-- Cambiado a flex-column y align-items-center para centrar verticalmente -->

                    @foreach ($images as $imagen)
                        <img src="{{ asset('storage/' . $imagen) }}" class="img-thumbnail mb-1 clickable-image"
                            alt="..." width="100" height="50" style="object-fit: cover;">
                    @endforeach
                </div>
                <div class="col-8.5 border rounded p-3" style="margin-top:2%;">
                    <div>
                        <img id="main-image" src="{{ asset('storage/' . $images[0]) }}" alt="..." width="500"
                            height="700">
                        <!-- Resto de tu código... -->
                    </div>

                </div>
            </div>
        </div>
        <div class="col-5" style="margin-top:2%;margin-right:2%;">
            <h1 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                style="font-size: 210%;font-weight:bold;text-align:center">{{ $id_producto_modelo->nombre }}</h1>

            <div style="margin-top:5%">
                <i class="fa-solid fa-star fa-2xl" style="color: #FFD43B;margin-left:4%"></i>
                <i class="fa-solid fa-star fa-2xl" style="color: #FFD43B;margin-left:-0.5%"></i>
                <i class="fa-solid fa-star fa-2xl" style="color: #FFD43B;margin-left:-0.5%"></i>
                <i class="fa-solid fa-star fa-2xl" style="color: #787878;margin-left:-0.5%"></i>
                <i class="fa-solid fa-star fa-2xl" style="color: #787878;margin-left:-0.5%"></i>
            </div>
            <h3 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                style="font-size: 180%;font-weight:bold;margin-left: 5%;margin-top:2%">$
                {{ $id_producto_modelo->precio }}
            </h3>
            <h2 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                style="font-size: 180%;font-weight:bold;margin-left: 5%;">
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
                                            <a href="#" wire:click="seleccionar_color('{{ $color }}')"><i
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
                                <div class="col-md-6 mb-3">
                                    <p class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                                        style="font-size: 120%; margin-left: 5%; margin-top: 2%;">
                                        <b>{{ $titulo_caracteristica }}:</b> {{ $valor_caracteristica }}
                                    </p>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div style="margin-right:2%;margin-top:2%">
            <div class="col-1 card mb-3 mh-50"
                style="width: 18rem;heigth: 18rem; border-radius: 8px;border: 2px solid black;margin-top:2%;margin-right:5%;margin-left:2%">
                <div class="card-body">
                    <h3 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                        style="font-size: 200%;font-weight:bold;margin-left: 20px;margin-top:5%;margin-bottom:15%;text-align:center">
                        {{ $id_producto_modelo->precio }}$</h3>
                    <div class="">
                    <br>
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
                        <br>
                        <br>
                        <br>
                        
                        <div>
                            <button class="btn btn-outline-dark text-nowrap" wire:click="send_to_cart"
                                data-bs-toggle="modal" data-bs-target="#modal_producto">AGREGAR AL CARRO</button>
                        </div>
                        <br>
                        <br>
                        <br>
                        <div>
                            <a class="btn btn-outline-dark text-nowrap" href="{{ route('carro-compras') }}">Ver
                                Carro</a>
                        </div>
                        <br>
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
        <div class="card mx-5"
            style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);;overflow-y: auto; max-height: 300px;">
            <div class="card-body" style=""> <!-- Añadido overflow-y: auto y max-height para el scroll -->
                <form wire:submit.prevent="realizarPregunta">
                    <div class=" mt-2">
                        <label class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                            style="font-size: 250%;margin-left: %;margin-top: %;" for="pregunta">
                            <b>Pregúntale al vendedor</b>
                        </label>

                    </div>



                    <div class="container-fluid h-100 d-flex align-items-center justify-content-center">
                        <div class="row w-100">
                            <div class="col-12" style="height: 100%">
                                <input type="text" name="pregunta" wire:model.debounce.365ms="pregunta"
                                    placeholder="Escriba acá"
                                    style="border-color: #80bdff;box-shadow: 0 0 5px rgba(128, 189, 255, 0.5);outline: none; transition: box-shadow 0.3s ease, border-color 0.3s ease;width: 100%;height: 100%;padding: 12px;box-sizing: border-box;border: 1px solid #ced4da; border-radius: .25rem;" />

                                @error('pregunta')
                                    <p class="text-red-700 font-semibold mt-2">
                                        {{ $message }}
                                    </p>
                                @enderror

                            </div>
                        </div>
                    </div>



                    <div id="captcha" class="mt-4" wire:ignore></div>

                    @error('captcha')
                        <p class="mt-3 text-sm text-red-600 text-left">
                            {{ $message }}
                        </p>
                    @enderror

                    <div class="d-flex justify-content-center align-items-center" style="">
                        <button type="submit" class="btn btn-warning btn-lg font-weight-bold"
                            style="margin-left:5%">
                            Enviar pregunta
                        </button>
                    </div>





                </form>
            </div>
        </div>
        <br>
        <br>
        <br>

        <h1 style="text-align:center">PREGUNTAS</h1>
        <div class="card mx-5"
            style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);;overflow-y: auto; max-height: 700px;">
            <div class="card-body" style=""> <!-- Añadido overflow-y: auto y max-height para el scroll -->
                @foreach ($preguntas_producto as $pregunta)
                    <div class="row"
                        style="background-color: #fff; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding: 20px; margin: 10px; ">
                        <div class="col-2 text-center">
                            <div class="d-flex justify-content-end align-items-center" style="height: 100%;">
                                <p class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                                    style="font-size: 140%; margin-top: 0;">
                                    <b>{{ $pregunta->user->name }}:</b>
                                </p>
                            </div>
                        </div>

                        <div class="col" style="margin-top:0.1%">
                            <p style="font-size: 130%; margin-top: 0;">
                                {{ $pregunta->pregunta }}
                            </p>
                        </div>

                        <div class="d-flex align-items-center">

                            <!-- Añadido align-items-center para centrar verticalmente -->
                            <div class="col text-center"style="margin-left:15%;margin-right:1%">
                                <!-- Añadido align-items-center para centrar verticalmente -->
                                <div class=" " style="background-color:#F2F2F2">
                                    <p class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                                        style="font-size: 100%;margin-left: %;margin-top: %;" for="pregunta">
                                        <b></b>
                                    </p>
                                </div>
                            </div>
                            <div class="col-10" style=";margin-bottom:%">
                                @if ($pregunta->respuesta != null)
                                    <p class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                                        style="font-size: 120%;margin-left: %;margin-top: %;">
                                        <b>VENDEDOR: {{ $pregunta->respuesta->respuesta }}</b>
                                    </p>
                                @else
                                    <p style="font-size: 120%">
                                        <b>
                                            No existe aun una respuesta
                                        </b>
                                    </p>
                                    @if (auth()->user()->id == $id_producto_modelo->producto->id_usuario)
                                        <p>Vendedor, ¿desea responder a esta pregunta?</p>
                                        <input type="text" wire:model="respuesta" class="form-control">
                                        <button class="btn btn-outline-dark"
                                            wire:click="responderPregunta({{ $pregunta->id }})">
                                            Responder
                                        </button>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
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

            <div style="text-align: center;">
                <button class="btn btn-warning" wire:click="redirect_nuevo_modelo()">Crear nuevo modelo</button>
            </div>

        </div>
    </div>
    @include('livewire.ver-productos.modal_ver-productos')

    <script src="https://www.google.com/recaptcha/api.js?onload=handle&render=explicit" async defer></script>

    <script>
        var handle = function(e) {
            widget = grecaptcha.render('captcha', {
                'sitekey': '{{ env('CAPTCHA_SITE_KEY') }}',
                'theme': 'light', // you could switch between dark and light mode.
                'callback': verify
            });

        }
        var verify = function(response) {
            @this.set('captcha', response)
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var images = document.querySelectorAll('.clickable-image');
            var mainImage = document.getElementById('main-image');

            images.forEach(function(image) {
                image.addEventListener('click', function() {
                    mainImage.src = image.src;
                });
            });
        });
    </script>
</div>
