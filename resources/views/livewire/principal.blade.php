<div style="">
    <div style="background-color:#253340;">
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container d-flex justify-content-start">
                <button class="btn btn-outline-light text-nowrap" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#sidebar">
                    <i class="fa-solid fa-bars fa-sm" style="color: #ffffff;"></i> Todo
                </button>
                <a class="btn btn-outline-light text-nowrap ms-1" type="submit"
                    href="https://www.amazon.com/-/es/gp/help/customer/display.html?nodeId=508510&ref_=nav_cs_customerservice">Servicio
                    al cliente</a>
                <a class="btn btn-outline-light text-nowrap ms-1" type="submit"
                    href="https://www.amazon.com/-/es/gp/browse.html?node=2238192011&ref_=nav_em_hmc_gc_allgc_0_2_27_2">Tarjetas
                    de regalo</a>
                <a class="btn btn-outline-light text-nowrap ms-1" type="submit"
                    href="{{ route('crear-producto') }}">Vender</a>
                <a class="btn btn-outline-light text-nowrap ms-1" type="submit" href="https://www.amazon.com/-/es/gp/help/customer/display.html?nodeId=508510&ref_=nav_cs_customerservice">Servicio al cliente</a>
                <a class="btn btn-outline-light text-nowrap ms-1" type="submit" href="{{ route('tarjeta-regalo') }}">Tarjetas de regalo</a>
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
                        <button wire:click="actualizar_vista_productos({{$departamento_cat->id}})" type="button"
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
                    <a type="button"
                        class="list-group-item list-group-item-action"href="{{ route('editar_perfil') }}">Editar
                        Perfil</a>
                    <button type="button" class="list-group-item list-group-item-action"> Carrito</button>

                </div>

            </div>
        </div>
    </div>



    <div>
        <div class="row row-cols-1 row-cols-md-4 g-4 m-4" style=" ">
            @foreach ($all_productos as $producto)
                <div class="col" style="height:">
                    <div class="card h-100" style="background-color:#F2F2F2">
                        <a wire:click="redirect_det({{$producto->id}})">
                            <img src="{{ asset('img/j11.jpeg') }}" class="card-img-top" alt="..."width="120"
                                height="300">
                        </a>
                        <h4 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                            style="font-size: 120%;font-weight:bold;margin:5%">{{ $producto->nombre }}
                        </h4>
                        <div class="" style="">
                            <i class="fa-solid fa-star fa-xl" style="color: #FFD43B;margin-left:5%"></i>
                            <i class="fa-solid fa-star fa-xl" style="color: #FFD43B;margin-left:-1%"></i>
                            <i class="fa-solid fa-star fa-xl" style="color: #FFD43B;margin-left:-1%"></i>
                            <i class="fa-solid fa-star fa-xl" style="color: #FFD43B;margin-left:-1%"></i>
                            <i class="fa-solid fa-star fa-xl" style="color: #787878;margin-left:-1%"></i>
                        </div>

                        <div style="margin-top:4%">
                            <p style="font-size: 170%;font-weight:bold;margin-left:5%">$ {{ $producto->precio }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
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
