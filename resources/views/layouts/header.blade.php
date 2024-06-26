<div>


    <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color:#131921 ">
        <div class="container d-flex justify-content-center">
            <a href="{{ route('principal') }}" style="">
                <img src="{{ asset('storage/logo.png') }}" alt="..." style ='width: 45%;'>
            </a>
            <div class="input-group" style="background-color:#131921">

                <li class="nav-item dropdown btn btn-outline-light ms-4 ">

                    <a class="nav-link" role="button" aria-expanded="false">
                        Todos
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Nombre dpto</a></li>
                    </ul>
                </li>

                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Buscar</button>
                </form>

            </div>


            <a class="btn btn-outline-light text-nowrap m-1"
                href="{{ route('ver-mis-garantias-reembolsos') }}">Garantias y Reembolsos</a>
            <a class="btn btn-outline-light text-nowrap m-1" href="{{ route('ver-pedidos') }}">Pedidos</a>

            <a class="btn btn-outline-light text-nowrap m-1 cart-button" href="{{ route('carro-compras') }}">Carrito
                <span class="cart-badge">{{$cant_productos_en_carrito}}</span>
            </a>







            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" style="color:white" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="color:white" href="/google-auth/redirect">Iniciar por Google</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" style="color:white"
                                    href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle"style="color:white" href="#"
                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} - {{ $usuario_actual->rol->nombre_rol }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                @if (auth()->user()->id_rol == 1)
                                    <a class="dropdown-item" href="{{ route('metodo-pagos') }}">
                                        {{ __('Mis metodos de Pago') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('direcciones') }}">
                                        {{ __('Mis direcciones') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('categorias') }}">
                                        {{ __('Categorias de productos') }}
                                    </a>
                                    </a>
                                    <a class="dropdown-item" href="{{ route('marcas') }}">
                                        {{ __('Marcas') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('editar_perfil') }}">
                                        {{ __('Editar Perfil') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('ver-todos-usuarios') }}">
                                        {{ __('Ver todos los usuarios') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('ver-todos-productos') }}">
                                        {{ __('Ver todos los productos') }}
                                    </a>
                                @else
                                    <a class="dropdown-item" href="{{ route('metodo-pagos') }}">
                                        {{ __('Mis metodos de Pago') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('direcciones') }}">
                                        {{ __('Mis direcciones') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('editar_perfil') }}">
                                        {{ __('Editar Perfil') }}
                                    </a>
                                @endif

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</div>
