<?php

namespace App\Http\Requests;

use App\Http\Requests\FormRequest;
use App\Http\Requests\Request;

class FormRequest extends FormRequest
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
          'nome' => ['required', 'min:10'],
          'profissao' => ['required', 'min:4'],
          'idade' => ['required', 'min:1', 'max:2'],
          'endereco' => ['required', 'min:12'],
          'fone' => ['required', 'min:8', 'max:11'],
          'celular' => ['required', 'min:8', 'max:11']
        ];
    }
}
