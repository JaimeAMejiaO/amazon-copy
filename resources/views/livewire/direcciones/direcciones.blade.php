<div>
    <div>
        <div class="row row-cols-1 row-cols-md-2 g-4 m-4">
            {{-- este es el bootn para agregar categorias --}}
            <div class="col p-0 ms-2" style="width:48%;height:30%">
                <button class="btn btn-outline-dark " style="width:100%;height:100%" data-bs-toggle="modal" data-bs-target="#crear_direccion">
                    <div class="text-center">
                        <i class="fa-solid fa-plus fa-10x"></i>
                        <h5 class="card-title text-center">Agregar Categoria</h5>
                    </div>
                </button>
                {{-- /////////////////////////////////////////// --}}



            </div>
            <div class="col" style="width:45% ;height:30%">
                <div class="card">
                    <h5 class="card-title text-center">Descubre tu imaginacion</h5>


                </div>
            </div>
            <div class="col">
                <div class="card">
                    <h5 class="card-title text-center">Para preparar en casa</h5>
                    <img src="{{ asset('img/jordan.png') }}" class="card-img-top" alt="...">

                </div>
            </div>
            <div class="col">
                <div class="card">
                    <h5 class="card-title text-center">Juguetes</h5>
                    <img src="{{ asset('img/jordan.png') }}" class="card-img-top" alt="...">

                </div>
            </div>

            <div class="col">
                <div class="card">
                    <h5 class="card-title text-center">Juguetes</h5>
                    <img src="{{ asset('img/jordan.png') }}" class="card-img-top" alt="...">

                </div>
            </div>
        </div>
    </div>

    @include('livewire.direcciones.modal_direcciones')
</div>
