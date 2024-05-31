<div style="background-color:#F2F2F2">
    <br>
    <div>
        <h3 class="card-title text-center" style="font-size: 2.5rem; font-weight: bold;"style="margin-botom:10%">
            Crear Producto Modelo</h3>
    </div>
    <br>
    <div class="container" style="background-color:#F2F2F2">
        <div class="card mx-auto" style="max-width: 600px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
            <div>
                <div class="container mt-3">
                    <div class="row">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <label for="modelo" class="card-title text-center mb-2"
                                    style="font-size: 1.5rem; font-weight: bold;margin-top:2%;">Nombre Modelo del
                                    producto:</label>
                            </div>

                        </div>
                        <div class="col">
                            <input type="text" name="modelo" id="modelo" wire:model.blur="nombre_modelo"
                                class="form-control" placeholder="Ej.: Camisa">
                        </div>
                        @error('nombre_modelo')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                </div>
            </div>


            <div class="container mt-3">
                <label for="descripcion " class="card-title text-center mb-2"
                    style="font-size: 1.5rem; font-weight: bold;margin-top:2%">Descripción del
                    producto:</label>
                <textarea name="descripcion" id="descripcion" wire:model.blur="desc_prod" class="form-control"></textarea>
                @error('desc_prod')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>


            @foreach ($array_cat as $array => $componente)
                <div class="container mt-3">
                    <div class="row">
                        <div class="col">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <label for="{{ $componente['nombre'] }}" class="card-title text-center mb-2"
                                        style="font-size: 1.5rem; font-weight: bold; margin-top: 2%">{{ $componente['nombre'] }}:</label>
                                    <!-- TODO: Poner If evaluadores de casos especiales por caracteristica, es decir, si evalua que una
                                caracteristica es color y dado que es un caso especial, el input no se muestra sino que se muestra un
                                color-picker, para tallas, se deben marcar que tallas hay disponibles de ese producto -->
                                </div>
                                <div class="col">
                                    <input class="form-control" wire:model.blur="array_cat.{{ $array }}.valor"
                                        type="text" name="{{ $componente['nombre'] }}"
                                        id="{{ $componente['nombre'] }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @error('array_cat.{{ $array }}.valor')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror
            @endforeach
            <div class="container " style="margin-top:3%">
                <div class="row">
                    <div class="col-auto">
                        <label for="precio" class="card-title text-center mb-2"
                            style="font-size: 1.5rem; font-weight: bold;margin-top:2%;">Precio:</label>
                    </div>
                    <div class="col">
                        <input type="text" name="precio" id="precio" wire:model.blur="precio"
                            class="form-control">
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
                        <label for="cantidad" class="card-title text-center mb-2"
                            style="font-size: 1.5rem; font-weight: bold;">Cant. disponible:</label>
                    </div>
                    <div class="col">
                        <input type="text" name="cantidad" id="cantidad" wire:model.blur="stock"
                            class="form-control">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <div class="text-center">
                <button wire:click="store" class="btn btn-warning btn-lg font-weight-bold"
                    style="margin-top:10%;margin-bottom:5%">Crear Modelo</button>
            </div>
        </div>
    </div>





</div>
