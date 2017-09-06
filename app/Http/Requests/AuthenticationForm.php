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
            'endereco' => ['required', 'min:10'],
            'email' => ['required', 'email', 'min:7'],
            'fone' => ['required', 'min:8', 'max:11'],
            'celular' => ['required', 'min:8', 'max:11']
        ];
        [
            'nome.required' => 'O Campo Nome e necessário por favor!',
            'nome.min' => 'O Nome Deve Possuir mais de 8 caracteres !',
            'profissao.required' => 'O Campo Profissão deve ser preenchido!',
            'profissao.min' => 'O Campo deve Possuir mais de 4 caracteres',
            'idade.required' => 'O Campo Idade deve ser preenchido!',
            'idade.min' => 'O Campo tem que possuir mais de 1 caracter!',
            'idade.max' => 'A sua Idade realmente esta correta!',
            'endereco.required' => 'O Campo Endereço deve ser preenchido!',
            'endereco.required' => 'O Endereço tem que ser mais claro!',
            'email.required' => 'O Campo Email deve ser preenchido',
            'email.email' => 'Preencha com um Email Válido!',
            'fone.required' => 'O Campo deve ser preenchido',
            'fone.required' => 'O Telefone deve ser válido!'
        ];
    }
}
