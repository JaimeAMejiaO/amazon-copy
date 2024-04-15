<div>
    <div>
        <div class="row row-cols-1 row-cols-md-2 g-4 m-4">
            {{-- este es el bootn para agregar categorias --}}
            <div class="col p-0 ms-3" style="width:48%;height:40%">
                <button class="btn btn-outline-dark " style="width:100%;height:100%" data-bs-toggle="modal"
                    data-bs-target="#crear_direccion">
                    <div class="text-center">
                        <i class="fa-solid fa-plus fa-10x"></i>
                        <h5 class="card-title text-center">Agregar Direccion</h5>
                        <br>
                        <br>
                    </div>
                </button>
                {{-- /////////////////////////////////////////// --}}


                {{-- este es un caso especial y tiene tamaño diferente a las otras tarjetas --}}
            </div>
            <div class="col ">
                <div class="card" style="margin-left:14px ">
                    <p class="text-center">CASA JULIAN CARTAGO</p>
                    <p class="text-center">Carrera 4 #18-32 Barrio el Llano </p>
                    <p class="text-center">Tercer piso timbre que dice Julian </p>
                    <p class="text-center">Cartago Valle, 70721 </p>
                    <p class="text-center">3012222016</p>
                    <div>
                        <button class="btn btn-outline-success text-nowrap " type="submit" data-bs-toggle="modal"
                            data-bs-target="#crear_direccion">Editar</button>
                        <button class="btn btn-outline-danger text-nowrap  " type="submit">Eliminar</button>
                    </div>

                </div>

            </div>
            {{-- /////////////////////////////////////////// --}}
            <div class="col">
                <div class="card">
                    <p class="text-center">CASA JULIAN CARTAGO</p>
                    <p class="text-center">Carrera 4 #18-32 Barrio el Llano </p>
                    <p class="text-center">Tercer piso timbre que dice Julian </p>
                    <p class="text-center">Cartago Valle, 70721 </p>
                    <p class="text-center">3012222016</p>
                    <div>
                        <button class="btn btn-outline-success text-nowrap " type="submit" data-bs-toggle="modal"
                            data-bs-target="#crear_direccion">Editar</button>
                        <button class="btn btn-outline-danger text-nowrap  " type="submit">Eliminar</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <p class="text-center">CASA JULIAN CARTAGO</p>
                    <p class="text-center">Carrera 4 #18-32 Barrio el Llano </p>
                    <p class="text-center">Tercer piso timbre que dice Julian </p>
                    <p class="text-center">Cartago Valle, 70721 </p>
                    <p class="text-center">3012222016</p>
                    <div>
                        <button class="btn btn-outline-success text-nowrap " type="submit" data-bs-toggle="modal"
                            data-bs-target="#crear_direccion">Editar</button>
                        <button class="btn btn-outline-danger text-nowrap  " type="submit">Eliminar</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <p class="text-center">CASA JULIAN CARTAGO</p>
                    <p class="text-center">Carrera 4 #18-32 Barrio el Llano </p>
                    <p class="text-center">Tercer piso timbre que dice Julian </p>
                    <p class="text-center">Cartago Valle, 70721 </p>
                    <p class="text-center">3012222016</p>
                    <div>
                        <button class="btn btn-outline-success text-nowrap " type="submit" data-bs-toggle="modal"
                            data-bs-target="#crear_direccion">Editar</button>
                        <button class="btn btn-outline-danger text-nowrap  " type="submit">Eliminar</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('livewire.direcciones.modal_direcciones')
</div>
