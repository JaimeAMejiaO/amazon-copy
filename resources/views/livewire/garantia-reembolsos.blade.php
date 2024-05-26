<div>
    <form></form>
        <div>
            <label for="tipo_peticion">Tipo de Petición:</label>
            <select name="tipo_peticion" id="tipo_peticion" wire:model="tipo_peticion">
                <option value="">Seleccione un tipo de petición</option>
                <option value="Garantia">Garantía</option>
                <option value="Reembolso">Reembolso</option>
            </select>
            @error('tipo_peticion')
                <span>{{$message}}</span>                
            @enderror
        </div>
        <div>
            <label for="motivo">Motivo:</label>
            <textarea name="motivo" id="motivo" wire:model="motivo"></textarea>
            @error('motivo')
                <span>{{$message}}</span>                
            @enderror
        </div>
        <div>
            <label for="imagen">Imagen:</label>
            <input type="file" name="imagen" id="imagen" wire:model="img">
            @error('img')
                <span>{{$message}}</span>                
            @enderror
        </div>
        <div>
            <label for="producto">Producto:</label>
            <select name="producto_seleccionado" id="producto_seleccionado" wire:model="producto_seleccionado">
                <option value="">Seleccione un producto</option>
                @foreach ($mostrar_producto as $producto)
                    <option value="{{$producto->id}}">{{$producto->nombre}}</option>
                @endforeach
            </select>
            @error('producto_seleccionado')
                <span>{{$message}}</span>                
            @enderror
        </div>
        <button type="submit" wire:click="realizarPeticion()">Enviar</button>
    </form>
</div>
