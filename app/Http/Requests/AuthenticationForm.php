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
            'full_name' => ['required', 'min:8'],
            'description' => ['required', 'min:4'],
            'age' => ['required', 'min:1', 'max:2'],
            'address' => ['required', 'min:10'],
            'email' => ['required', 'email', 'min:7'],
            'phone' => ['required', 'min:8', 'max:11'],
            'cell_phone' => ['required', 'min:8', 'max:11']
        ];
        [
            'full_name.required' => 'O Campo Nome e necessário por favor!',
            'full_name.min' => 'O Nome Deve Possuir mais de 8 caracteres !',
            'description.required' => 'O Campo Profissão deve ser preenchido!',
            'description.min' => 'O Campo deve Possuir mais de 4 caracteres',
            'age.required' => 'O Campo Idade deve ser preenchido!',
            'age.min' => 'O Campo tem que possuir mais de 1 caracter!',
            'age.max' => 'A sua Idade realmente esta correta!',
            'address.required' => 'O Campo Endereço deve ser preenchido!',
            'address.required' => 'O Endereço tem que ser mais claro!',
            'email.required' => 'O Campo Email deve ser preenchido',
            'email.email' => 'Preencha com um Email Válido!',
            'phone.required' => 'O Campo deve ser preenchido',
            'phone.required' => 'O Telefone deve ser válido!'
        ];
    }
}
