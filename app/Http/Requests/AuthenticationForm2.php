<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Request;
use App\Http\Requests\AuthenticationForm;

class AuthenticationForm2 extends FormRequest
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
            'name' => ['required', 'min:8'],
            'description' => ['required', 'min:4'],
        ];
        [
            'name.required' => 'Preencha o Campo Nome por favor!',
            'name.min' => 'O Nome Deve Possuir mais de 8 caracteres !',
            'description.required' => 'O Campo Descrição deve ser preenchido!',
            'description.min' => 'O Campo deve Possuir mais de 4 caracteres',
        ];
    }
}
