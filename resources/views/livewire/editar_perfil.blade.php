<div ">
    <br>
    <br>
    <div class="container">
        <div class="card mx-auto" style="max-width: 600px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
            <div>
                <h3 class="card-title text-center" style="font-size: 2.5rem; font-weight: bold;"style="margin-botom:10%">
                    Editar Perfil</h3>
            </div>


            <div class="container " style="margin-top:3%">
                <div class="row">
                    <div class="col-auto">
                        <label class="card-title text-center mb-2"
                            style="font-size: 1.5rem; font-weight: bold;">NOMBRE</label>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Ej.: CARLOS ESTEBAN ">
                    </div>
                </div>


                <div class="row">
                    <div class="col-auto">
                        <label class="card-title text-center mb-2"
                            style="font-size: 1.5rem; font-weight: bold;">APELLIDO</label>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Ej.: RENTERIA MURILLO ">
                    </div>
                </div>

                <div class="row">
                    <div class="col-auto">
                        <label for="categoria" class="card-title text-center mb-2"
                            style="font-size: 1.5rem; font-weight: bold;">NUMERO</label>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" pattern="\d{13}" title="Debe contener 13 dígitos"
                            placeholder="Ingrese su número telefónico" required>
                    </div>

                </div>


                <div class="row">
                    <div class="col-auto">
                        <label for="categoria" class="card-title text-center mb-2"
                            style="font-size: 1.5rem; font-weight: bold;">EMAIL</label>
                    </div>
                    <div class="col">
                        <input type="email" class="form-control" placeholder="correo@gmail.com">
                    </div>

                </div>


                <div class="row">
                    <div class="col-auto">
                        <label for="categoria" class="card-title text-center mb-2"
                            style="font-size: 1.5rem; font-weight: bold;">FECHA NACIMIENTO</label>
                    </div>
                    <div class="col">
                        <input type="date" class="form-control">
                    </div>

                </div>

                <div class="text-center">
                    <button wire:click="store" class="btn btn-warning btn-lg font-weight-bold"
                        style="margin-top:10%;margin-bottom:5%">Actualizar</button>
                </div>


            </div>
        </div>
