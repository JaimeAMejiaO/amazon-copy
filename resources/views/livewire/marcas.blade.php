<div>
    @if($marcas->count() > 0)
        <ul>
            @foreach($marcas as $marca)
                <li>
                    {{ $marca->nombre }}
                    <button><i class="fa fa-pencil"></i></button>
                    <button wire:click="delete({{$marca->id}})"><i class="fa fa-trash"></i></button>
                </li>
            @endforeach
        </ul>
    @else
        <p>No hay marcas creadas.</p>
    @endif

    <div>
        <input wire:model.blur="nombre_marca" id="nombre_marca" type="text" name="nombre_marca" placeholder="Nombre de la marca">
        <button wire:click="store">Guardar</button>
    </div>
</div>
