<div>

    <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color:#131921 ">
        <div class="container d-flex justify-content-center">
            <a href="{{ route('principal') }}" style="">
                <img src="{{ asset('img/amazon-negro.png') }}" alt="..." style = 'width: 30%;'>
            </a>
            <div class="input-group" style="background-color:#131921">

                <li class="nav-item dropdown btn btn-outline-light ms-4 ">
                    <a class="nav-link  " href="{{ route('departamentos') }}" role="button"
                        aria-expanded="false">
                        Todos
                    </a>
                    <ul class="dropdown-menu">
                        
                    </ul>
                </li>

                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Buscar</button>
                </form>

            </div>


            <button class="btn btn-outline-light text-nowrap" type="submit">Devoluciones y Pedidos</button>
            <button class="btn btn-outline-light text-nowrap" type="submit">Carrito</button>

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
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="{{ route('metodo-pagos') }}">
                                    {{ __('Metodos de Pago') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('direcciones') }}">
                                    {{ __('Direcciones') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('categorias') }}">
                                    {{ __('categorias') }}
                                </a>
                                </a>
                                <a class="dropdown-item" href="#">
                                    {{ __('Editar Usuario') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('marcas') }}">
                                    {{ __('Marcas') }}
                                </a>

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
