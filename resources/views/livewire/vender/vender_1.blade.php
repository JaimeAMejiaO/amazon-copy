<div>
    <div class="container" style="margin-top: 50px;">
        <div class="card mx-auto" style="max-width: 600px;">
            <div class="card-body">
                <h3 class="card-title text-center" style="font-size: 2.5rem; font-weight: bold;">¡Hola! Antes que nada
                    cuéntanos, ¿qué vas a publicar?</h3>
                <div style="margin-left:10%;margin-right:10%">
                    <input class="form-control mt-4" style="font-size: 1.5rem;" type="text"
                        placeholder="Ej.: Celular Samsung Galaxy S9 ">
                </div>
            </div>

            <div>
                <h3 class="card-title text-center" style="font-size: 1.5rem; font-weight: bold;"> ¿A cual de los
                    siguientes departamentos pertenece?</h3>
                <div class="form-group" style="margin-left:12%;margin-right:12%">
                    <select class="form-control" id="departamento" name="departamento" style="">
                        @foreach ($departamentos_cat as $departamento_cat)
                            <option value="{{ $departamento_cat->id }}">{{ $departamento_cat->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div>
                <h3 class="card-title text-center" style="font-size: 1.5rem; font-weight: bold;"> ¿A que categoria?</h3>
                <div class="form-group" style="margin-left:12%;margin-right:12%">
                    <select class="form-control" id="departamento" name="departamento" style="">
                        @foreach ($departamentos_cat as $departamento_cat)
                            <option value="{{ $departamento_cat->id }}">{{ $departamento_cat->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="container mt-5">
    <h2 class="card-title text-center" style="font-size: 1.5rem; font-weight: bold; margin-bottom: 5%">Agrega una imagen principal</h2>
    <form action="#" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="image" class="form-label">Seleccione una imagen:</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
    </form>
</div>

<div class="container mt-3">
    <div class="d-flex justify-content-center">
        <button class="btn btn-warning btn-sm">Confirmar</button>
    </div>
</div>
        </div>

    </div>
