<?php

namespace App\Livewire;

use App\Models\Direccion;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Direcciones extends Component
{
    use LivewireAlert;

    public $direccion_id;
    public $nombre_completo;
    public $num_tel;
    public $direccion;
    public $especificacion_dir;
    public $departamentos = [];
    public $departamento_seleccionado = "Antioquia";
    public $municipios = [];
    public $municipio_seleccionado = "Medellín";
    public $barrio;
    public $cod_postal;
    public $direcciones = [];
    public $usuario_actual;
    public $titulo_modal;
    public $tipo_modal;

    public function mount()
    {
        $this->usuario_actual = Auth::user();

        $client = new Client();
        $url = "https://www.datos.gov.co/resource/xdk5-pm3f.json";

        $response = $client->request('GET', $url);

        $responseData = json_decode($response->getBody()->getContents());

        foreach ($responseData as $data) {
            $this->departamentos[] = $data->departamento;
            $this->municipios[] = $data->municipio;
        }

        // Eliminar duplicados
        $this->departamentos = array_unique($this->departamentos);
        $this->municipios = array_unique($this->municipios);
    }

    public function render()
    {
        $this->direcciones = Direccion::where('id_usuario', $this->usuario_actual->id)->get();
        return view('livewire.direcciones.direcciones');
    }

    public function abrir_modal_direccion($direccion_id, $opc)
    {
        if ($opc == 1) {
            $this->titulo_modal = 'Editar dirección';
            $this->tipo_modal = "edit";
            $this->direccion_id = $direccion_id;
            $direccion = Direccion::find($direccion_id);
            $this->nombre_completo = $direccion->nombre_completo;
            $this->num_tel = $direccion->num_tel;
            $this->direccion = $direccion->direccion;
            $this->especificacion_dir = $direccion->especificacion_dir;
            $this->departamentos = $this->departamentos;
            $this->municipios = $this->municipios;
            $this->barrio = $direccion->barrio;
            $this->cod_postal = $direccion->cod_postal;
        } elseif ($opc == 2) {
            $this->titulo_modal = 'Agregar nueva dirección';
            $this->tipo_modal = "store";
        }
        $this->dispatch('abrir_modal_direccion');
    }

    public function store()
    {
        $rules = [
            'nombre_completo' => 'required|max:50',
            'num_tel' => 'required|max:30',
            'direccion' => 'required|max:50',
            'especificacion_dir' => 'max:50',
            'departamento_seleccionado' => 'required',
            'municipio_seleccionado' => 'required',
            'barrio' => 'required',
            'cod_postal' => 'required',
        ];

        $messages = [
            'nombre_completo.required' => 'El campo nombre completo es requerido.',
            'nombre_completo.max' => 'El campo nombre completo no debe ser mayor a 50 caracteres.',
            'num_tel.required' => 'El campo número de teléfono es requerido.',
            'num_tel.max' => 'El campo número de teléfono no debe ser mayor a 30 caracteres.',
            'direccion.required' => 'El campo dirección es requerido.',
            'direccion.max' => 'El campo dirección no debe ser mayor a 50 caracteres.',
            'especificacion_dir.max' => 'El campo especificación de dirección no debe ser mayor a 50 caracteres.',
            'departamento_seleccionado.required' => 'El campo departamento es requerido.',
            'municipio_seleccionado.required' => 'El campo ciudad es requerido.',
            'barrio.required' => 'El campo barrio es requerido.',
            'cod_postal.required' => 'El campo código postal es requerido.',
        ];

        $this->validate($rules, $messages);

        Direccion::create([
            'nombre_completo' => $this->nombre_completo,
            'num_tel' => $this->num_tel,
            'direccion' => $this->direccion,
            'especificacion_dir' => $this->especificacion_dir,
            'departamento' => $this->departamento_seleccionado,
            'ciudad' => $this->municipio_seleccionado,
            'barrio' => $this->barrio,
            'cod_postal' => $this->cod_postal,
            'id_usuario' => Auth::user()->id,
        ]);

        $this->dispatch('cerrar_modal_direccion');

        $this->alert('success', 'Direccion agregada!');

        $this->resetUI();
    }

    public function update()
    {
        $this->validate([
            'nombre_completo' => 'required|max:50',
            'num_tel' => 'required|max:30',
            'direccion' => 'required|max:50',
            'especificacion_dir' => 'max:50',
            'departamento_seleccionado' => 'required',
            'municipio_seleccionado' => 'required',
            'barrio' => 'required',
            'cod_postal' => 'required',
        ]);

        Direccion::find($this->direccion_id)->update([
            'nombre_completo' => $this->nombre_completo,
            'num_tel' => $this->num_tel,
            'direccion' => $this->direccion,
            'especificacion_dir' => $this->especificacion_dir,
            'departamento' => $this->departamento_seleccionado,
            'ciudad' => $this->municipio_seleccionado,
            'barrio' => $this->barrio,
            'cod_postal' => $this->cod_postal,
        ]);

        $this->dispatch('cerrar_modal_direccion');

        $this->alert('success', 'Direccion editada!');

        $this->resetUI();
    }

    public function delete($direccion_id)
    {
        Direccion::find($direccion_id)->delete();
        $this->resetUI();
    }

    public function resetUI()
    {
        $this->reset([
            'direccion_id',
            'nombre_completo',
            'num_tel',
            'direccion',
            'especificacion_dir',
            'departamento_seleccionado',
            'municipio_seleccionado',
            'barrio',
            'cod_postal',
            'titulo_modal',
            'tipo_modal',
        ]);
    }
}
