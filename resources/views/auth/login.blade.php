<div class="d-flex justify-content-center align-items-center" style="height:100%;">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <div style="width:50%">
        <div class="container" style="width:100%;">
            <div class="row justify-content-center" style="width:100%">
                <div class="col-md-8">
                    <div class="card" style="border-radius: 8px;border: 2px solid black;">
                        <div class="card-header"style="text-align:center;">
                            <h2>Inicio Sesion</h2>
                        </div>

                        <div class="card-body" style="">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="row mb-3">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-md-end">{{ __('E-mail') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3" style="">
                                    <div class="col-md-6 offset-md-4" style="">
                                        <div class="form-check" style="">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Mantener sesión iniciada') }}
                                            </label>

                                        </div>
                                        <div style="text-align:center;">
                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Reestablecer contraseña') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>


                                <div class="" style="text-align:center">
                                    <div class="">
                                        <button type="submit" class="btn btn-warning">
                                            {{ __('Continuar') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
