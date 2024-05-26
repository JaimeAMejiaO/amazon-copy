<div>

    <div style="background-color:#F2F2F2">
        <br>
        <br>
        <br>
        <br>
        <div class="container" style="background-color:#F2F2F2">
            <div class="card mx-auto" style="max-width: 600px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
                <div style="margin-top:5%;margin-bottom:4%;">
                    <h3 class="card-title text-center"
                        style="font-size: 2.5rem; font-weight: bold;"style="">
                        Garantias y Rembolsos</h3>
                </div>


                <div class="container mt-3">
                    <div class="row">
                        <div class="col-3">
                            <label for="producto" class="card-title text-center mb-2"
                                style="font-size: 1.5rem; font-weight: bold;">Producto:</label>
                        </div>
                        <div class="col">
                            <select name="producto_seleccionado" id="producto_seleccionado"
                                wire:model="producto_seleccionado" class="form-select">
                                <option value="">Seleccione un producto</option>
                                @foreach ($mostrar_producto as $producto)
                                    <option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>


                </div>
                @error('producto_seleccionado')
                <div class="text-center" style="color:red">
                    <span>{{ $message }}</span>
                    </div>
                @enderror

                <div class="container mt-3">
                    <div class="row">
                        <div class="col-3">

                            <label for="tipo_peticion"class="card-title text-center mb-2"
                                style="font-size: 1.5rem; font-weight: bold;margin-left:40%">Tipo:</label>
                        </div>
                        <div class="col">
                            <select name="tipo_peticion" id="tipo_peticion" wire:model="tipo_peticion"
                                class="form-select">
                                <option value="">Seleccione un tipo de petición</option>
                                <option value="Garantia">Garantía</option>
                                <option value="Reembolso">Reembolso</option>
                            </select>
                        </div>
                    </div>
                </div>
                @error('tipo_peticion')
                <div class="text-center" style="color:red">
                    <span>{{ $message }}</span>
                </div>
                @enderror




                


                <div>
                    <div class="text-center" style="margin-top:3%">

                        <label for="motivo" class="form-label"
                            style="font-size: 1.5rem; font-weight: bold;">Motivo</label>

                    </div>
                    <textarea name="motivo" id="motivo" class="form-control" rows="3" wire:model="motivo"></textarea>
                    @error('motivo')
                    <div class="text-center" style="color:red">
                        <span>{{ $message }}</span>
                        </div>
                    @enderror



                </div>
            


            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title text-center mb-4">Subir Evidencia</h4>
                                <div class="form-group">
                                    <label for="imagen">Selecciona Imagenes:</label>
                                    <input type="file" name="imagen" id="imagen" wire:model="img">
                                    @error('img')
                                    <div class="text-center" style="color:red">
                                        <span>{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="text-center">
                <button type="submit" wire:click="realizarPeticion()" class="btn btn-warning btn-lg font-weight-bold"
                    style="margin-top:10%;margin-bottom:5%">Enviar</button>
            </div>


        </div>
        <br>
        <br>
        <br>
    </div>
</div>
