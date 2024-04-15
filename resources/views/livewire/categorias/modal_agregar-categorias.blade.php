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
        <div class="d-flex col">
            <div class="row mb-3">
                <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <button class=" btn btn-outline-danger text-nowrap  " type="submit">-</button>
            </div>
 <div class="row     mb-3">
                <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <button class="col btn btn-outline-danger text-nowrap  " type="submit">-</button>
            </div>
            

        </div>





    </form>
</x-modal>
