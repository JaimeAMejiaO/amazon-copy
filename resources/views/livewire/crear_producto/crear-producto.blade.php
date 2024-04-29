<div>
    <div>
        <div>
            <label for="categoria">Categoría:</label>
            <select name="categoria" id="categoria" wire:model.live="cat_seleccionada">
                <option value="0">Seleccionar categoría</option>
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                @endforeach
            </select>
        </div>
        @error('cat_seleccionada')
            <span class="text-danger">
                {{ $message }}
            </span>
        @enderror
        <div>
            <label for="marca">Marca:</label>
            <select name="marca" id="marca" wire:model.live="marca_seleccionada">
                <option value="0">Seleccionar marca</option>
                @foreach ($marcas as $marca)
                    <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
                @endforeach
            </select>
        </div>
        @error('marca_seleccionada')
            <span class="text-danger">
                {{ $message }}
            </span>
        @enderror
        <div>
            <label for="modelo">Modelo del producto:</label>
            <input type="text" name="modelo" id="modelo" wire:model.blur="nombre_modelo">
        </div>
        @error('nombre_modelo')
            <span class="text-danger">
                {{ $message }}
            </span>
        @enderror
        <div>
            <label for="descripcion">Descripción del producto:</label>
            <textarea name="descripcion" id="descripcion" wire:model.blur="desc_prod"></textarea>
            @error('desc_prod')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
        @if ($cat_seleccionada)
            @foreach ($array_cat as $array => $componente)
                <div>
                    <label for="{{ $componente['nombre'] }}">{{ $componente['nombre'] }}:</label>
                    <!-- TODO: Poner If evaluadores de casos especiales por caracteristica, es decir, si evalua que una
                    caracteristica es color y dado que es un caso especial, el input no se muestra sino que se muestra un
                    color-picker, para tallas, se deben marcar que tallas hay disponibles de ese producto -->

                    <input wire:model.blur="array_cat.{{ $array }}.valor" type="text"
                        name="{{ $componente['nombre'] }}" id="{{ $componente['nombre'] }}">
                </div>
                @error('array_cat.{{ $array }}.valor')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror
            @endforeach
        @endif
        <div>
            <label for="precio">Precio:</label>
            <input type="text" name="precio" id="precio" wire:model.blur="precio">
        </div>
        @error('precio')
            <span class="text-danger">
                {{ $message }}
            </span>
        @enderror
        <div>
            <label for="cantidad">Cantidad disponible:</label>
            <input type="text" name="cantidad" id="cantidad" wire:model.blur="stock">
        </div>
        @error('stock')
            <span class="text-danger">
                {{ $message }}
            </span>
        @enderror
        <button wire:click="store">Crear producto</button>
    </div>
</div>
