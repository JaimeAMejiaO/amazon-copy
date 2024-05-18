<?php

namespace App\Livewire;

use App\Models\Pregunta;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class Preguntas extends Component
{
    public $captcha = null;
    public $pregunta;

    public function render()
    {
        return view('livewire.preguntas');
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

    public function store(){
        $rules = [
            'pregunta' => 'required|max:255',
            'captcha' => 'required',
        ];

        $messages = [
            'pregunta.required' => 'La pregunta es requerida',
            'pregunta.max' => 'La pregunta no puede tener más de 255 caracteres',
        ];

        $this->validate($rules, $messages);

        Pregunta::create([
            'pregunta' => $this->pregunta,
            'id_usuario' => auth()->id(),
            'id_prod_mod' => 1,
        ]);
    }
}
