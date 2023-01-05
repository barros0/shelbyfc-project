<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GameRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'stock_bilhetes' => 'required|numeric',
            'data_limite_bilhetes' => 'required|date',
            'preco_bilhete' => 'required|numeric|min:0',
            'preco_bilhete_socio' => 'required|numeric|min:0',
            'local' => 'required',
            'equipa' => 'required|exists:teams,id',
            'data_jogo' => 'required|date',
        ];
    }
}
