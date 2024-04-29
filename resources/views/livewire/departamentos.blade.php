<div ">
    <div style=";margin-top:2%;">
        <h3 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
            style="font-size: 280%;font-weight:bold;margin-left: 20px;margin-top:2%;text-align:center">Departamentos
        </h3>
    </div>
    <div class="row row-cols-5 row-cols-md-4 g-4 m-4" style=" ">
        @foreach ($departamentos_cat as $departamento_cat)
            <div class="col" style="">

                <button class="btn btn-outline-dark "
                    style="width:100%;height:100%;margin-top:5%;margin-bottom:5%"class="btn btn-warning">

                    <h5 class="card-title mb-0center">{{ $departamento_cat->nombre }}</h5>


                </button>

            </div>
        @endforeach
    </div>
</div>
