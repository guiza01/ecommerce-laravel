<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:255',
            'description' => 'required|min:10',
            'body' => 'required|min:20',
            'price' => 'required',
            'slug' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'min' => 'Campo deve ter no mínimo 10 caracteres',
            'max' => 'Campo deve ter no maximo 255 caracteres',
            'required' => 'Preencha o campo corretamente',
        ];
    }
}
