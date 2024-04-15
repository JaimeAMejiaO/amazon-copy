<x-modal title="Categorias" type="store" id="crear_categorias">
    {{-- El titulo tiene que ser variable ya que va a ser el mismo modal para edita y crear --}}
    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Titulo Categoria</label>
            <input type="name" class="form-control" id="titulo_categoria" aria-describedby="emailHelp">
        </div>
        <div class="mb-3 text-center">
            <label for="exampleInputEmail1" class="form-label text-center" style="">Caracteristicas
                Categorias</label>
        </div>
        <div class="d-flex justify-content-center align-items-center"
            style="margin-left:20%;margin-right:20%;margin-bottom:3%">
            <div class="input-group" style="max-width: 600px;">
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <button class="btn btn-outline-danger text-nowrap" type="submit" style="height: 100%;">-</button>
            </div>
        </div>

        <div class="d-flex justify-content-center align-items-center" style="">
            <button class="btn btn-outline-success" style="width: 10%; height: 10%; margin: auto;">+</button>
        </div>





    </form>
</x-modal>
