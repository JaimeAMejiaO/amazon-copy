<div>
    <div class="row row-cols-1 row-cols-md-4 g-4 m-4" style=" ">
        @foreach ($all_productos as $producto)
            <div class="col" style="height:">
                <a wire:click="redirect_det({{ $producto->id }})" href="#" style="text-decoration: none">
                    <div class="card h-100" style="background-color:#F2F2F2">
                        
                        <img src="{{ asset('storage/' . $producto->img) }}" class="card-img-top" alt="..."
                            height="500">

                        <h4 class="a-size-mini a-spacing-none a-color-base s-line-clamp-4"
                            style="font-size: 120%;font-weight:bold;margin:5%">{{ $producto->nombre }}
                        </h4>
                        <div style="margin-top:4%">
                            <a wire:click="eliminarProducto({{$producto->id}})" class="btn btn-danger">Eliminar</a>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
