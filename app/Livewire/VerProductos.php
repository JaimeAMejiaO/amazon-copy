<?php

namespace App\Livewire;

use App\Models\CarroCompra;
use App\Models\Pregunta;
use App\Models\Producto;
use App\Models\ProductoModelo;
use App\Models\Respuesta;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;

class VerProductos extends Component
{
    public $id_producto;
    public $id_producto_modelo;
    public $modelo_actual;
    public $producto_modelos;
    public $array_cat; //Obtener las caracteristicas de la categoria con su información
    public $explode_array_cat; //Divis 
    public $colores = []; //Obtener los colores de los modelos
    public $tallas = [];
    public $ram = [];
    public $almacenamiento = []; //Obtener las tallas de los modelos
    public $cant_seleccionada = 1; //Cantidad seleccionada del producto que se quiere enviar al carro
    public $color_anterior;
    public $talla_seleccionada;
    public $almacenamiento_seleccionado;
    public $images;
    public $captcha = null;
    public $pregunta;
    public $preguntas_producto;
    public $respuesta;

    public function mount($id)
    {
        //Obtener el producto padre
        //Producto::where('id', $this->id_producto)->first()->id
        //Obtener el modelo producto que se selecciono
        //ProductoModelo::where('id_producto', $this->id_producto)->first();
        $this->id_producto = $id;
        $this->id_producto_modelo = ProductoModelo::find($id);
        $this->producto_modelos = ProductoModelo::with('producto')->where('id_producto', $this->id_producto_modelo->id_producto)->get();
        $this->modelo_actual = $this->producto_modelos->where('id', $this->id_producto_modelo->id)->first();
        //dd($this->modelo_actual);
        //dd($this->id_producto_modelo->id);
        $this->array_cat = explode('~', $this->id_producto_modelo->array_cat);
        $this->explode_array_cat = array();
        $this->images = explode(',', $this->modelo_actual->img);
        //dd($this->modelo_actual);
        //dd($this->modelo_actual->producto->categoria->nombre);

        $this->preguntas_producto = Pregunta::with('user', 'respuesta')->where('id_prod_mod', $this->id_producto_modelo->id)->get();
        //dd($this->preguntas_producto[0]->respuesta->respuesta);

        foreach ($this->array_cat as $cat) {
            //Dividir el elemento en key y value usando ":"
            list($key, $value) = explode(':', $cat);
            //Agregar el par clave-valor al nuevo array
            $this->explode_array_cat[trim($key)] = trim($value);
        }

        //Obtener los colores de los modelos
        /*if (isset($this->explode_array_cat['Color'])) {
            $producto_modelos = $this->producto_modelos->where('id', '!=', $this->modelo_actual->id);
            foreach ($producto_modelos as $modelo) {
                $array_cat = explode('~', $modelo->array_cat);
                $explode_array_cat = array();
                foreach ($array_cat as $cat) {
                    list($key, $value) = explode(':', $cat);
                    $explode_array_cat[trim($key)] = trim($value);
                }
                $this->colores[] = $explode_array_cat['Color'];
            }
            dd($this->colores);
        }*/
        $indice = 0;
        //Obtener los colores de los modelos
        if (isset($this->explode_array_cat['Color'])) {
            $colores = explode(',', $this->explode_array_cat['Color']);
            foreach ($colores as $color) {
                if ($indice == 0) {
                    $this->colores[$color] = true;
                    $this->color_anterior = $color;
                } else {
                    $this->colores[$color] = false;
                }
                $indice++;
            }
        }


        if (isset($this->explode_array_cat['Talla'])) {
            $this->tallas = explode(',', $this->explode_array_cat['Talla']);
            $this->talla_seleccionada = $this->tallas[0];
        }

    
        $indice = 0;
        if (isset($this->explode_array_cat['Almacenamiento'])) {
            $almacenamiento = explode(',', $this->explode_array_cat['Almacenamiento']);
            foreach ($almacenamiento as $almace) {
                if ($indice == 0) {
                    $this->almacenamiento[$almace] = true;
                    $this->almacenamiento_seleccionado = $almace;
                } else {
                    $this->almacenamiento[$almace] = false;
                }
                $indice++;

            }
            
        }
        /*Obtener las tallas de los modelos
        if (isset($this->explode_array_cat['Talla'])) {
            $producto_modelos = $this->producto_modelos->where('id', '!=', $this->modelo_actual->id);
            foreach ($producto_modelos as $modelo) {
                $array_cat = explode('~', $modelo->array_cat);
                $explode_array_cat = array();
                foreach ($array_cat as $cat) {
                    list($key, $value) = explode(':', $cat);
                    $explode_array_cat[trim($key)] = trim($value);
                }
                $this->tallas[] = $explode_array_cat['Talla'];
            }
        }
        dd($this->modelo_actual->stock);*/
    }


    public function render()
    {
        return view('livewire.ver-productos.ver-productos');
    }

    public function seleccionar_color($color_seleccionado)
    {
        if ($this->color_anterior) {

            $this->colores[$this->color_anterior] = false;
            $this->color_anterior = $color_seleccionado;
        } else {
            $this->color_anterior = $color_seleccionado;
        }
        $this->colores[$color_seleccionado] = true;
    }

    public function seleccionar_almacenamiento($almacenamiento_escogido)
    {
        if ($this->almacenamiento_seleccionado) {

            $this->almacenamiento[$this->almacenamiento_seleccionado] = false;
            $this->almacenamiento_seleccionado = $almacenamiento_escogido;
        } else {
            $this->almacenamiento_seleccionado = $almacenamiento_escogido;
        }
        $this->almacenamiento[$almacenamiento_escogido] = true;
        
    }


    public function send_to_cart()
    {
        $caracteristicas = $this->explode_array_cat;
        
        if (isset($this->explode_array_cat['Color'])) {
            $caracteristicas['Color'] = $this->color_anterior;
        }


        if (isset($this->explode_array_cat['Talla'])) {
            $caracteristicas['Talla'] = $this->talla_seleccionada;


            //dd($caracteristicas);

        }
        if (isset($this->explode_array_cat['Almacenamiento'])) {
            $caracteristicas['Almacenamiento'] = $this->almacenamiento_seleccionado;
        }

        if (isset($this->explode_array_cat['RAM'])) {
            $this->ram = explode(',', $this->explode_array_cat['RAM']);
        }

        

        $caracteristicas_texto = '';
        foreach ($caracteristicas as $key => $value) {
            if ($caracteristicas_texto == '')
                $caracteristicas_texto .= $key . ':' . $value;
            else
                $caracteristicas_texto .= '~' . $key . ':' . $value;
        }
        if (CarroCompra::where('id_prod_mod', $this->id_producto_modelo->id)->where('caracteristicas', $caracteristicas_texto)->exists()) {
            $carro = CarroCompra::where('id_prod_mod', $this->id_producto_modelo->id)->where('caracteristicas', $caracteristicas_texto)->first();
            //dd($carro->cant + $this->cant_seleccionada);
            if ($carro->cant + $this->cant_seleccionada > $this->id_producto_modelo->stock) {
                dump('No hay suficiente stock');
            } else {
                $carro->cant = $carro->cant + $this->cant_seleccionada;
                $carro->save();
            }
        } else {
            //dd('AAAAAAAAAAAAAAAAAAAAAAAAAAAA');
            $rules = [
                'cant_seleccionada' => 'required',
            ];

            $messages = [
                'cant_seleccionada.required' => 'La cantidad es requerida',
            ];

            $this->validate($rules, $messages);
            //dd('entre');

            CarroCompra::create([
                'cant' => $this->cant_seleccionada,
                'id_usuario' => auth()->user()->id,
                'id_prod_mod' => $this->id_producto_modelo->id,
                'caracteristicas' => $caracteristicas_texto
            ]);
        }
    }

    public function updatedCaptcha($token)
    {
        $response = Http::post(
            'https://www.google.com/recaptcha/api/siteverify?secret=' .
                env('CAPTCHA_SECRET_KEY') .
                '&response=' . $token
        );

        $success = $response->json()['success'];

        if (!$success) {
            throw ValidationException::withMessages([
                'captcha' => __('Google piensa que eres un bot, refresca la pagina e intentalo otra vez!'),
            ]);
        } else {
            $this->captcha = true;
        }
    }

    // validate the captcha rule
    protected function rules()
    {
        return [
            'captcha' => ['required'],
            // ...
        ];
    }

    public function realizarPregunta(){
        $rules = [
            'pregunta' => 'required|max:255',
            'captcha' => 'required',
        ];

        $messages = [
            'pregunta.required' => 'La pregunta es requerida',
            'pregunta.max' => 'La pregunta no puede tener más de 255 caracteres',
            'captcha.required' => 'El captcha es requerido',
        ];

        $this->validate($rules, $messages);

        Pregunta::create([
            'pregunta' => $this->pregunta,
            'id_usuario' => Auth::user()->id,
            'id_prod_mod' => $this->id_producto_modelo->id,
        ]);

        redirect()->route('ver-productos', ['id' => $this->id_producto_modelo->id_producto]);
    }

    public function responderPregunta($id_pregunta){
        $rules = [
            'respuesta' => 'required|max:255',
        ];

        $messages = [
            'respuesta.required' => 'La respuesta es requerida',
            'respuesta.max' => 'La respuesta no puede tener más de 255 caracteres',
        ];

        $this->validate($rules, $messages);

        Respuesta::create([
            'respuesta' => $this->respuesta,
            'id_usuario' => Auth::user()->id,
            'id_pregunta' => $id_pregunta,
        ]);

        redirect()->route('ver-productos', ['id' => $this->id_producto_modelo->id_producto]);
    }
    
    public function redirect_nuevo_modelo()
    {
        redirect()->route('crear-modelo-producto', ['id' => $this->id_producto_modelo->id_producto]);
    }

    public function resetUI()
    {
        $this->reset('cant_seleccionada');
    }
}
