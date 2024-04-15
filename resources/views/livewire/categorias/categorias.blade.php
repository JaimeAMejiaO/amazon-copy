<div>
    <div>
        <div class="row row-cols-1 row-cols-md-2 g-4 m-4">
            {{-- este es el bootn para agregar categorias --}}
            <div class="col p-0 ms-3" style="width:48%;height:40%">
                <button class="btn btn-outline-dark " style="width:100%;height:100%" data-bs-toggle="modal"
                    data-bs-target="#crear_categorias">
                    <div class="text-center">
                        <i class="fa-solid fa-plus fa-10x"></i>
                        <h5 class="card-title text-center">Agregar Categoria</h5>
                        <br>
                        <br>
                    </div>
                </button>
                {{-- /////////////////////////////////////////// --}}


                {{-- este es un caso especial y tiene tamaño diferente a las otras tarjetas --}}
            </div>
            <div class="col" style="">
                <div class="card h-100" style="margin-left:14px ">
                    <h3 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                        style="font-size: 210%;font-weight:bold;text-align:center">Zapatos</h3>
                    <h3 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                        style="font-size: 120%;font-weight:bold;text-align:center">Caracteristicas:</h3>
                    <p class="text-center">Color</p>
                    <p class="text-center">Talla</p>
                    <div class="d-flex align-items-end h-100" style="">
                        <button class="btn btn-outline-success text-nowrap " type="submit" data-bs-toggle="modal"
                            data-bs-target="#crear_categorias">Editar</button>
                        <button class="btn btn-outline-danger text-nowrap  " type="submit">Eliminar</button>
                    </div>

                </div>

            </div>
            {{-- /////////////////////////////////////////// --}}
            <div class="col">
                <div class="card h-100">
                    <h3 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                        style="font-size: 210%;font-weight:bold;text-align:center">Juguetes</h3>
                    <h3 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                        style="font-size: 120%;font-weight:bold;text-align:center">Caracteristicas:</h3>
                    <p class="text-center">Color</p>
                    <p class="text-center">Tamaño</p>
                    <div class="d-flex align-items-end h-100" style="">
                        <button class="btn btn-outline-success text-nowrap " type="submit" data-bs-toggle="modal"
                            data-bs-target="#crear_categorias">Editar</button>
                        <button class="btn btn-outline-danger text-nowrap  " type="submit">Eliminar</button>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>

    @include('livewire.categorias.modal_agregar-categorias')
</div>
