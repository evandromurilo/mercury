<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Request;
use App\Http\Requests\AuthenticationForm;

class AuthenticationForm extends FormRequest
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
            'nome' => ['required', 'min:8'],
            'profissao' => ['required', 'min:4'],
            'idade' => ['required', 'min:1', 'max:2'],
            'endereco' => ['required', 'min:12'],
            'fone' => ['required', 'min:8', 'max:11'],
            'celular' => ['required', 'min:8', 'max:11']
        ];
        [
            'nome.required' => 'Preencha o Campo Nome por favor!',
            'nome.min' => 'O Nome Deve Possuir mais de 8 caracteres !',

        ];
    }
}
