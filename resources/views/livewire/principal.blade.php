<div style="">
    <div style="background-color:#253340;">
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container d-flex justify-content-start">
                <button class="btn btn-outline-light text-nowrap" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#sidebar">
                    <i class="fa-solid fa-bars fa-sm" style="color: #ffffff;"></i> Todo
                </button>
                <a class="btn btn-outline-light text-nowrap ms-1" type="submit" href="https://www.amazon.com/-/es/gp/help/customer/display.html?nodeId=508510&ref_=nav_cs_customerservice">Servicio al cliente</a>
                <a class="btn btn-outline-light text-nowrap ms-1" type="submit" href="#">Tarjetas de regalo</a>
                <a class="btn btn-outline-light text-nowrap ms-1" type="submit" href="{{ route('crear-producto') }}">Vender</a>
                <!-- Aquí pueden ir más botones si los necesitas -->
            </div>
        </nav>
    </div>

    <!-- Aquí está el sidebar. -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebar">
        <div class="offcanvas-header" style="background-color:#253340;">
            <div class="col-8">

                @if (Auth::check())
                    <h4 class="offcanvas-title a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                        style="font-size: 140%;font-weight:bold;margin:5%;color:#FFFFFF;"><i
                            class="fa-solid fa-user fa-sm" style="color: #ffffff;margin-right:3%"></i>Hola,
                        {{ Auth::user()->name }}</h4>
                @else
                    <h4 class="offcanvas-title a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                        style="font-size: 140%;font-weight:bold;margin:5%;color:#FFFFFF;"><i
                            class="fa-solid fa-user fa-sm" style="color: #ffffff;margin-right:3%"></i>Hola,
                        Invitado</h4>
                @endif


            </div>

            <div>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
            </div>
        </div>
        <div class="offcanvas-body">
            <div>
                <h4 class="offcanvas-title a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                    style="font-size: 150%;font-weight:bold;margin:5%;">Contenido y Dispositivos Digitales</h4>
                <div class="list-group">
                    <a type="button" class="list-group-item list-group-item-action"
                        href="https://music.amazon.com/unlimited?ref_=nav_em__dm_hf_0_2_2_2">Amazon Music</a>
                    <a type="button" class="list-group-item list-group-item-action"
                        href="https://www.amazon.com/kindle-dbs/storefront?storeType=browse&node=154606011">E-readers
                        Kindle y
                        Libros</a>
                    <a type="button" class="list-group-item list-group-item-action"
                        href="https://www.amazon.com/-/es/gp/browse.html?node=2350149011&ref_=nav_em__adr_app_0_2_4_2">Amazon
                        AppStore</a>

                </div>
            </div>

            <div>
                <h4 class="offcanvas-title a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                    style="font-size: 150%;font-weight:bold;margin:5%;">Buscar por departamento</h4>
                <div class="list-group">
                    @foreach ($departamentos_cat as $departamento_cat)
                        <button type="button"
                            class="list-group-item list-group-item-action">{{ $departamento_cat->nombre }}</button>
                    @endforeach
                </div>

            </div>

            <div>
                <h4 class="offcanvas-title a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                    style="font-size: 150%;font-weight:bold;margin:5%;">Programas y funcionalidades</h4>
                <div class="list-group">
                    <a type="button" class="list-group-item list-group-item-action"
                        href="https://www.amazon.com/-/es/gp/browse.html?node=2238192011&ref_=nav_em_hmc_gc_allgc_0_2_27_2">Tarjetas
                        de regalo</a>
                    <a type="button" class="list-group-item list-group-item-action"
                        href="https://www.amazon.com/finds?ref_=nav_em_allpf_foundit_d_0_1_1_30">Comprar por interes</a>
                    <a type="button" class="list-group-item list-group-item-action"
                        href="https://www.amazon.com/-/es/live?ref_=nav_em_sd_al_dest_0_2_28_2">Amazon Live</a>
                    <a type="button" class="list-group-item list-group-item-action"
                        href="https://www.amazon.com/-/es/gp/help/customer/display.html?nodeId=201910800&ref_=nav_em_full_store_dir_AG_shipping_0_2_29_2">Tienda
                        Internacional</a>
                    <a type="button" class="list-group-item list-group-item-action"
                        href="https://www.amazon.com/b?node=70673024011&ref_=asc_surl_amsc&language=es&ref_=nav_em__amsc_hamburger_0_1_1_33">Amazon
                        Second Chance </a>



                </div>

            </div>

            <div>
                <h4 class="offcanvas-title a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                    style="font-size: 150%;font-weight:bold;margin:5%;">Ayuda y configuracion</h4>
                <div class="list-group">
                    <a type="button" class="list-group-item list-group-item-action"href="{{ route('editar_perfil') }}">Editar Perfil</a>
                    <button type="button" class="list-group-item list-group-item-action"> Carrito</button>

                </div>

            </div>
        </div>
    </div>



    <div>
        <div class="row row-cols-1 row-cols-md-4 g-4 m-4" style=" ">
            <div class="col" style="height:">
                <div class="card h-100" style="background-color:#F2F2F2">
                    <a href="{{ route('ver-productos') }}">
                        <img src="{{ asset('img/j11.jpeg') }}" class="card-img-top" alt="..."width="120"
                            height="300">
                    </a>
                    <h4 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                        style="font-size: 120%;font-weight:bold;margin:5%">Nike Air Jordan 11" Gratitude 2023 para
                        hombre
                    </h4>
                    <div class="" style="">
                        <i class="fa-solid fa-star fa-xl" style="color: #FFD43B;margin-left:5%"></i>
                        <i class="fa-solid fa-star fa-xl" style="color: #FFD43B;margin-left:-1%"></i>
                        <i class="fa-solid fa-star fa-xl" style="color: #FFD43B;margin-left:-1%"></i>
                        <i class="fa-solid fa-star fa-xl" style="color: #787878;margin-left:-1%"></i>
                        <i class="fa-solid fa-star fa-xl" style="color: #787878;margin-left:-1%"></i>
                    </div>

                    <h4 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                        style="font-size: 100%;font-weight:bold;margin:5%">Colores:</h4>
                    <div class="" style="">
                        <i class="fa-solid fa-circle fa-2xl" style="color: #74C0FC;margin-left:5%"></i>
                        <i class="fa-solid fa-circle fa-2xl" style="color: #B197FC;margin-left:0%"></i>
                    </div>
                    <div style="margin-top:4%">
                        <p style="font-size: 170%;font-weight:bold;margin-left:5%">$130.000</p>
                    </div>

                </div>
            </div>
            <div class="col" style="">
                <div class="card h-100" style="background-color:#F2F2F2">
                    <a href="{{ route('ver-productos') }}">
                        <img src="{{ asset('img/j10.jpeg') }}" class="card-img-top" alt="..."width="120"
                            height="300">
                    </a>
                    <h4 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                        style="font-size: 120%;font-weight:bold;margin:5%">Jordan Hombres Air 10 Retro
                    </h4>
                    <div class="" style="">
                        <i class="fa-solid fa-star fa-xl" style="color: #FFD43B;margin-left:5%"></i>
                        <i class="fa-solid fa-star fa-xl" style="color: #FFD43B;margin-left:-1%"></i>
                        <i class="fa-solid fa-star fa-xl" style="color: #FFD43B;margin-left:-1%"></i>
                        <i class="fa-solid fa-star fa-xl" style="color: #FFD43B;margin-left:-1%"></i>
                        <i class="fa-solid fa-star fa-xl" style="color: #787878;margin-left:-1%"></i>
                    </div>

                    <h4 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                        style="font-size: 100%;font-weight:bold;margin:5%">Colores:</h4>
                    <div class="" style="">
                        <i class="fa-solid fa-circle fa-2xl" style="color: #17fd1b;margin-left:5%"></i>
                    </div>
                    <div style="margin-top:4%" class="">
                        <p style="font-size: 170%;font-weight:bold;margin-left:5%">$180.000</p>
                    </div>

                </div>
            </div>
            <div class="col" style="">
                <div class="card h-100" style="background-color:#F2F2F2">
                    <a href="{{ route('ver-productos') }}">
                        <img src="{{ asset('img/j9.jpeg') }}" class="card-img-top" alt="..."width="120"
                            height="300">
                    </a>
                    <h4 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                        style="font-size: 120%;font-weight:bold;margin:5%"> Jordan Air Jordan 9 Botas para hombre
                    </h4>
                    <div class="" style="">
                        <i class="fa-solid fa-star fa-xl" style="color: #FFD43B;margin-left:5%"></i>
                        <i class="fa-solid fa-star fa-xl" style="color: #FFD43B;margin-left:-1%"></i>
                        <i class="fa-solid fa-star fa-xl" style="color: #FFD43B;margin-left:-1%"></i>
                        <i class="fa-solid fa-star fa-xl" style="color: #FFD43B;margin-left:-1%"></i>
                        <i class="fa-solid fa-star fa-xl" style="color: #FFD43B;margin-left:-1%"></i>
                    </div>

                    <h4 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                        style="font-size: 100%;font-weight:bold;margin:5%">Colores:</h4>
                    <div class="" style="">
                        <i class="fa-solid fa-circle fa-2xl" style="color: #17fd1b;margin-left:5%"></i>
                        <i class="fa-solid fa-circle fa-2xl" style="color: #74C0FC;"></i>
                        <i class="fa-solid fa-circle fa-2xl" style="color: #17fd1b;"></i>
                    </div>
                    <div style="margin-top:4%">
                        <p style="font-size: 170%;font-weight:bold;margin-left:5%">$190.000</p>
                    </div>

                </div>
            </div>
            <div class="col" style="">
                <div class="card h-100" style="background-color:#F2F2F2">
                    <a href="{{ route('ver-productos') }}">
                        <img src="{{ asset('img/j8.jpeg') }}" class="card-img-top" alt="..."width="120"
                            height="300">
                    </a>
                    <h4 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                        style="font-size: 120%;font-weight:bold;margin:5%">Jordan Hombres Air 8 Retro Zapatos De
                        Basquetbol
                    </h4>
                    <div class="" style="">
                        <i class="fa-solid fa-star fa-xl" style="color: #FFD43B;margin-left:5%"></i>
                        <i class="fa-solid fa-star fa-xl" style="color: #FFD43B;margin-left:-1%"></i>
                        <i class="fa-solid fa-star fa-xl" style="color: #FFD43B;margin-left:-1%"></i>
                        <i class="fa-solid fa-star fa-xl" style="color: #787878;margin-left:-1%"></i>
                        <i class="fa-solid fa-star fa-xl" style="color: #787878;margin-left:-1%"></i>
                    </div>

                    <h4 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                        style="font-size: 100%;font-weight:bold;margin:5%">Colores:</h4>
                    <div class="" style="">
                        <i class="fa-solid fa-circle fa-2xl" style="color: #c80e0e;margin-left:5%"></i>
                        <i class="fa-solid fa-circle fa-2xl" style="color: #17fd1b;"></i>
                    </div>
                    <div style="margin-top:4%">
                        <p style="font-size: 170%;font-weight:bold;margin-left:5%">$210.000</p>
                    </div>

                </div>
            </div>
            <div class="col" style="">
                <div class="card h-100" style="background-color:#F2F2F2">
                    <a href="{{ route('ver-productos') }}">
                        <img src="{{ asset('img/j7.jpeg') }}" class="card-img-top" alt="..."width="120"
                            height="300">
                    </a>
                    <h4 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                        style="font-size: 120%;font-weight:bold;margin:5%">Zapatos Air Jordan 7 Retro para hombre
                    </h4>
                    <div class="" style="">
                        <i class="fa-solid fa-star fa-xl" style="color: #FFD43B;margin-left:5%"></i>
                        <i class="fa-solid fa-star fa-xl" style="color: #787878;margin-left:-1%"></i>
                        <i class="fa-solid fa-star fa-xl" style="color: #787878;margin-left:-1%"></i>
                        <i class="fa-solid fa-star fa-xl" style="color: #787878;margin-left:-1%"></i>
                        <i class="fa-solid fa-star fa-xl" style="color: #787878;margin-left:-1%"></i>
                    </div>

                    <h4 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                        style="font-size: 100%;font-weight:bold;margin:5%">Colores:</h4>
                    <div class="" style="">
                        <i class="fa-solid fa-circle fa-2xl" style="color: #17fd1b;margin-left:5%"></i>
                    </div>
                    <div style="margin-top:4%">
                        <p style="font-size: 170%;font-weight:bold;margin-left:5%">$100.000</p>
                    </div>

                </div>
            </div>
            <div class="col" style="">
                <div class="card h-100" style="background-color:#F2F2F2">
                    <a href="{{ route('ver-productos') }}">
                        <img src="{{ asset('img/j6.jpeg') }}" class="card-img-top" alt="..."width="120"
                            height="300">
                    </a>
                    <h4 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                        style="font-size: 120%;font-weight:bold;margin:5%">Jordan 6 Retro Tenis para hombre
                    </h4>
                    <div class="" style="">

                        <i class="fa-solid fa-star fa-xl" style="color: #FFD43B;margin-left:5%"></i>
                        <i class="fa-solid fa-star fa-xl" style="color: #FFD43B;margin-left:-1%"></i>
                        <i class="fa-solid fa-star fa-xl" style="color: #FFD43B;margin-left:-1%"></i>
                        <i class="fa-solid fa-star fa-xl" style="color: #FFD43B;margin-left:-1%"></i>
                        <i class="fa-solid fa-star fa-xl" style="color: #FFD43B;margin-left:-1%"></i>
                    </div>

                    <h4 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                        style="font-size: 100%;font-weight:bold;margin:5%">Colores:</h4>
                    <div class="" style="">
                        <i class="fa-solid fa-circle fa-2xl" style="color: #c80e0e;margin-left:5%"></i>
                    </div>
                    <div style="margin-top:4%">
                        <p style="font-size: 170%;font-weight:bold;margin-left:5%">$135.000</p>
                    </div>

                </div>
            </div>
            <div class="col" style="">
                <div class="card h-100" style="background-color:#F2F2F2">
                    <a href="{{ route('ver-productos') }}">
                        <img src="{{ asset('img/j5.jpeg') }}" class="card-img-top" alt="..."width="120"
                            height="300">
                    </a>
                    <h4 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                        style="font-size: 120%;font-weight:bold;margin:5%">Nike Hombres Air Jordan 5 Retro Se
                    </h4>
                    <div class="" style="">
                        <i class="fa-solid fa-star fa-xl" style="color: #FFD43B;margin-left:5%"></i>
                        <i class="fa-solid fa-star fa-xl" style="color: #FFD43B;margin-left:-1%"></i>
                        <i class="fa-solid fa-star fa-xl" style="color: #FFD43B;margin-left:-1%"></i>
                        <i class="fa-solid fa-star fa-xl" style="color: #787878;margin-left:-1%"></i>
                        <i class="fa-solid fa-star fa-xl" style="color: #787878;margin-left:-1%"></i>
                    </div>

                    <h4 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                        style="font-size: 100%;font-weight:bold;margin:5%">Colores:</h4>
                    <div class="" style="">
                        <i class="fa-solid fa-circle fa-2xl" style="color: #B197FC;margin-left:5%"></i>
                    </div>
                    <div style="margin-top:4%">
                        <p style="font-size: 170%;font-weight:bold;margin-left:5%">$220.000</p>
                    </div>

                </div>
            </div>
            <div class="col" style="">
                <div class="card h-100" style="background-color:#F2F2F2">
                    <a href="{{ route('ver-productos') }}">
                        <img src="{{ asset('img/j4.jpeg') }}" class="card-img-top" alt="..."width="120"
                            height="300">
                    </a>
                    <h4 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                        style="font-size: 120%;font-weight:bold;margin:5%">Nike Jordan Air 4 Retro unisex para adultos
                    </h4>
                    <div class="" style="">
                        <i class="fa-solid fa-star fa-xl" style="color: #FFD43B;margin-left:5%"></i>
                        <i class="fa-solid fa-star fa-xl" style="color: #FFD43B;margin-left:-1%"></i>
                        <i class="fa-solid fa-star fa-xl" style="color: #FFD43B;margin-left:-1%"></i>
                        <i class="fa-solid fa-star fa-xl" style="color: #787878;margin-left:-1%"></i>
                        <i class="fa-solid fa-star fa-xl" style="color: #787878;margin-left:-1%"></i>
                    </div>

                    <h4 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                        style="font-size: 100%;font-weight:bold;margin:5%">Colores:</h4>
                    <div class="" style="">
                        <i class="fa-solid fa-circle fa-2xl" style="color: #17fd1b;margin-left:5%"></i>
                        <i class="fa-solid fa-circle fa-2xl" style="color: #FFD43B;"></i>
                        <i class="fa-solid fa-circle fa-2xl" style="color: #74C0FC;"></i>
                        <i class="fa-solid fa-circle fa-2xl" style="color: #B197FC;"></i>
                        <i class="fa-solid fa-circle fa-2xl" style="color: #c80e0e;"></i>
                        <i class="fa-solid fa-circle fa-2xl" style="color: #17fd1b;"></i>
                    </div>
                    <div style="margin-top:4%">
                        <p style="font-size: 170%;font-weight:bold;margin-left:5%">$130.000</p>
                    </div>

                </div>
            </div>
            <div class="col" style="">
                <div class="card h-100" style="background-color:#F2F2F2">
                    <a href="{{ route('ver-productos') }}">
                        <img src="{{ asset('img/j3.jpeg') }}" class="card-img-top" alt="..."width="120"
                            height="300">
                    </a>
                    <h4 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                        style="font-size: 120%;font-weight:bold;margin:5%">Jordan Big Kid 3 Retro Fear
                    </h4>
                    <div class="" style="">
                        <i class="fa-solid fa-star fa-xl" style="color: #FFD43B;margin-left:5%"></i>
                        <i class="fa-solid fa-star fa-xl" style="color: #FFD43B;margin-left:-1%"></i>
                        <i class="fa-solid fa-star fa-xl" style="color: #FFD43B;margin-left:-1%"></i>
                        <i class="fa-solid fa-star fa-xl" style="color: #787878;margin-left:-1%"></i>
                        <i class="fa-solid fa-star fa-xl" style="color: #787878;margin-left:-1%"></i>
                    </div>

                    <h4 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                        style="font-size: 100%;font-weight:bold;margin:5%">Colores:</h4>
                    <div class="" style="">
                        <i class="fa-solid fa-circle fa-2xl" style="color: #FFD43B;margin-left:5%"></i>
                        <i class="fa-solid fa-circle fa-2xl" style="color: #74C0FC;"></i>
                    </div>
                    <div style="margin-top:4%">
                        <p style="font-size: 170%;font-weight:bold;margin-left:5%">$199.000</p>
                    </div>

                </div>
            </div>


        </div>
    </div>

    <script>
        function mostrar() {
            document.getElementById("sidebar").style.width = "300px";
            document.getElementById("contenido").style.marginLeft = "300px";
            document.getElementById("abrir").style.display = "none";
            document.getElementById("cerrar").style.display = "inline";
        }

        function ocultar() {
            document.getElementById("sidebar").style.width = "0";
            document.getElementById("contenido").style.marginLeft = "0";
            document.getElementById("abrir").style.display = "inline";
            document.getElementById("cerrar").style.display = "none";
        }
    </script>
</div>
