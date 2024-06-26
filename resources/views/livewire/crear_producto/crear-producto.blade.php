<div style="background-color:#F2F2F2">
    <br>
    <br>
    <br>
    <br>
    <div class="container" style="background-color:#F2F2F2">
        <div class="card mx-auto" style="max-width: 600px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
            <div>
                <h3 class="card-title text-center" style="font-size: 2.5rem; font-weight: bold;"style="margin-botom:10%">
                    ¡Hola! Antes que nada
                    cuéntanos, ¿qué vas a publicar?</h3>
            </div>

            <div class="container mt-3">
                <div class="row">
                    <div class="col-auto">
                        <label for="categoria" class="card-title text-center mb-2"
                            style="font-size: 1.5rem; font-weight: bold;">Categoría:</label>
                    </div>
                    <div class="col">
                        <select name="categoria" id="categoria" class="form-select" wire:model.live="cat_seleccionada">
                            <option value="0" selected disabled>Seleccionar categoría</option>
                            @foreach ($categorias as $categoria)
                                <option value="{{ $categoria->id }}">{{ $categoria->nombre }} del dpto.
                                    {{$categoria->departamento->nombre}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            @error('cat_seleccionada')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
            <div class="container mt-3">
                <div class="row">
                    <div class="col-auto">
                        <label for="marca" class="card-title text-center mb-2"
                            style="font-size: 1.5rem; font-weight: bold;">Marca:</label>
                    </div>
                    <div class="col"style="margin-left:6.5%">
                        <select name="marca" id="marca" class="form-select" wire:model.live="marca_seleccionada">
                            <option value="0" selected disabled>Seleccionar marca</option>
                            @foreach ($marcas as $marca)
                                <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>

                @error('marca_seleccionada')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror
                <div>
                    <div class="text-center" style="margin-top:3%">

                        <label for="marca" class="card-title text-center mb-2"
                            style="font-size: 1.5rem; font-weight: bold;">Modelo del producto</label>
                    </div>
                    <input type="text" name="modelo" id="modelo" class="form-control"
                        wire:model.blur="nombre_modelo" placeholder="Ej.: Celular Samsung Galaxy S9 ">

                </div>
                @error('nombre_modelo')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror
                <div>
                    <div class="text-center" style="margin-top:3%">

                        <label for="marca" class="form-label"
                            style="font-size: 1.5rem; font-weight: bold;">Descripción del producto</label>

                    </div>
                    <textarea name="descripcion" id="descripcion" class="form-control" rows="3" wire:model.blur="desc_prod"></textarea>

                    @error('desc_prod')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                @if ($cat_seleccionada)
                    @foreach ($array_cat as $array => $componente)
                        <div class="container mt-3">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-7">
                                        @if ($componente['nombre'] == 'Color')
                                            <div class="text-center">
                                                <label for="exampleColorInput" class="form-label"
                                                    style="font-size: 1.5rem; font-weight: bold">Color picker</label>
                                                <div class="row justify-content-center">
                                                    <input type="color" class="form-control form-control-color"
                                                        id="exampleColorInput" value="#563d7c"
                                                        title="Choose your color">
                                                </div>
                                                <div class="row justify-content-center">
                                                    <p>Solo se puede ingresar numeros en hexadecimal separados por ","
                                                    </p>
                                                </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-auto">
                                    <label for="{{ $componente['nombre'] }}" class="card-title text-center mb-2"
                                        style="font-size: 1.5rem; font-weight: bold">{{ $componente['nombre'] }}:</label>
                                </div>


                                <div class="col">
                                    <input wire:model.blur="array_cat.{{ $array }}.valor" type="text"
                                        name="{{ $componente['nombre'] }}" id="{{ $componente['nombre'] }}"
                                        class="form-control">
                                </div>
                                @error('array_cat.{{ $array }}.valor')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                    @endforeach

            </div>
        </div>
        @endif
        <div class="container " style="margin-top:3%">
            <div class="row">
                <div class="col-auto">
                    <label for="categoria" class="card-title text-center mb-2"
                        style="font-size: 1.5rem; font-weight: bold;">Precio:</label>
                </div>
                <div class="col">
                    <input type="text" name="precio" id="precio" class="form-control" wire:model.blur="precio"
                        placeholder="Ej.: 340.000 ">
                </div>
            </div>
        </div>
        @error('precio')
            <span class="text-danger">
                {{ $message }}
            </span>
        @enderror
        <div class="container " style="margin-top:3%">
            <div class="row">
                <div class="col-auto">
                    <label for="categoria" class="card-title text-center mb-2"
                        style="font-size: 1.5rem; font-weight: bold;">Cantidad disponible:</label>
                </div>
                <div class="col">
                    <input type="text" name="cantidad" id="cantidad" wire:model.blur="stock"
                        placeholder="Ej.: 10 " class="form-control">
                </div>
            </div>
        </div>
        @error('stock')
            <span class="text-danger">
                {{ $message }}
            </span>
        @enderror

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center mb-4">Subir Imágenes</h4>
                            <div class="form-group">
                                <label for="imagenes">Selecciona Imágenes:</label>
                                <input type="file" wire:model="images" multiple>
                            </div>
                            @error('images')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="text-center">
            <button wire:click="store" class="btn btn-warning btn-lg font-weight-bold"
                style="margin-top:10%;margin-bottom:5%">Crear producto</button>
        </div>


    </div>
</div>
