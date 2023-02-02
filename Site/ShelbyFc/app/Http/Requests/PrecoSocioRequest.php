<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PrecoSocioRequest extends FormRequest
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
            'nome' => 'required',
            'idade_maxima' => 'required|numeric|min:0',
            'idade_minima' => 'required|numeric|min:0',
            'preco' => 'required',
        ];
    }
}
