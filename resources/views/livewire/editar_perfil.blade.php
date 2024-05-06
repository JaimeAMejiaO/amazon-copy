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
                            style="font-size: 1.5rem; font-weight: bold;">Nombres</label>
                    </div>
                    <div class="col">
                        <input wire:model="name" type="text" class="form-control" placeholder="Ingrese su nombre acá" value="{{ $usuario->name }}" required>
                    </div>
                </div>


                <div class="row">
                    <div class="col-auto">
                        <label class="card-title text-center mb-2"
                            style="font-size: 1.5rem; font-weight: bold;">Apellidos</label>
                    </div>
                    <div class="col">
                        <input wire:model.blur="apell" type="text" class="form-control" placeholder="Ingrese sus apellidos acá" value="{{ $usuario->apell }}" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-auto">
                        <label for="categoria" class="card-title text-center mb-2"
                            style="font-size: 1.5rem; font-weight: bold;">Número de telefono</label>
                    </div>
                    <div class="col">
                        <input wire:model.blur="celular" type="text" class="form-control" pattern="\d{13}" title="Debe contener 13 dígitos"
                            placeholder="Ingrese su celular acá" value="{{ $usuario->celular }}" required>
                    </div>

                </div>


                <div class="row">
                    <div class="col-auto">
                        <label for="categoria" class="card-title text-center mb-2"
                            style="font-size: 1.5rem; font-weight: bold;">E-mail</label>
                    </div>
                    <div class="col">
                        <input wire:model.blur="email" type="email" class="form-control" placeholder="amazon.copy@amazon.com" value=" {{ $usuario->email }}">
                    </div>

                </div>


                <div class="row">
                    <div class="col-auto">
                        <label for="categoria" class="card-title text-center mb-2"
                        style="font-size: 1.5rem; font-weight: bold;">Fecha de nacimiento</label>
                    </div>
                    <div class="col">
                        <input wire:model.blur="fecha_nac" type="date" class="form-control">
                    </div>

                </div>

                <div class="text-center">
                    <button wire:click="update" class="btn btn-warning btn-lg font-weight-bold"
                        style="margin-top:10%;margin-bottom:5%">Actualizar</button>
                </div>


            </div>
        </div>
