@props([
    'title', //titulo del modal
    'size' => '',
    /*Tamaño del modal, opciones 
    [nombre => tamaño maximo]: 
    [ NULL => 500px]
    [sm => 300px],
    [lg => 800px],
    [xl => 1140],
    [fullscreen => Tamaño de la pantalla],
    */
    'type' =>
        '' /* Tipo de modal, opciones
    [nombre => accion]:
    [NULL => no tiene boton de confirmacion],
    [store => boton 'guardar', ejecuta la funcion 'store' del controlador],
    [edit => boton 'actualizar', ejecuta la funcion 'update' del controlador ]
    [custom => requiere las propiedades 'button', 'function': button será el nombre del boton
                y function la funcion que ejecutará
    ]
    */,
    'button' => '', //Nombre del boton personalizado
    'function' => '', //Funcion que ejecutara el boton personalizado
    'id' // Identificador del modal,
])

<div class="modal fade {{ $size ? ($size == 'fullscreen' ? '' : 'modal-' . $size) : '' }}" id={{$id}} tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false" wire:ignore.self>
    <div class="modal-dialog {{ $size == 'fullscreen' ? 'modal-fullscreen' : '' }}">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $title }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" wire:click='resetUI'></button>
            </div>
            <div class="modal-body" >
                {{ $slot }}
            </div>
            <div class="modal-footer">
                <x-primary-button  data-bs-dismiss="modal" wire:click='resetUI'>
                    Cerrar
                </x-primary-button>
                @if ($type == 'store')
                    <x-primary-button  wire:click='store'>
                        Guardar
                    </x-primary-button>
                @elseif ($type == 'edit')
                    <x-primary-button  wire:click='update'>
                        Actualizar
                    </x-primary-button>
                @elseif ($type == 'custom')
                    <x-primary-button wire:click='{{$function}}'>
                        {{$button}}
                    </x-primary-button>
                @endif
            </div>
        </div>
    </div>

</div>