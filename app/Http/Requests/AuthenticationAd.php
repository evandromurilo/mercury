<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Request;
use App\Http\Requests\AuthenticationForm;

class AuthenticationAd extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

          return [
            'title' => ['required', 'min:8', 'max:30'],
            'description' => ['required', 'min:10'],
            'contact' => ['required'],
        ];
        [
            'title.required' => 'O Campo Título é necessário por favor!',
            'title.min' => 'O Campo Título Possuir mais de 8 caracteres!',
            'title.max' => 'O Campo Título Possuir menos de 20 caracteres!',
            'description.required' => 'O Campo Descrição deve ser preenchido!',
            'description.min' => 'O Campo Descrição deve Possuir mais de 4 caracteres.',
            'contact.required' => 'O Campo Contato deve ser preenchido.',
        ];

    }
}
