<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LibrosRequest extends FormRequest
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
            'titulo' => 'required|max:210|min:3',
            'autor'  => 'required|max:70|min:3',
            'año' => 'required|integer|min:1000|max:'.date('Y'),
            'genero' => 'required|max:70|min:3',

        ];
    }
    public function messages()
    {
        return[
            'titulo.required' => 'El titulo es requerido',
            'titulo.max' => 'El titulo excede el limite de caracteres',
            'titulo.min' => 'El titulo debe tener minimo 3 caracteres',
            'autor.required' => 'El autor es requerido',
            'autor.max' => 'El autor excede el limite de caracteres',
            'autor.min' => 'El autor debe tener minimo 3 caracteres',
            'año.required' => 'El año es requerido',
            'año.max' => 'El año no debe ser mayor al actual',
            'año.min' => 'El año debe ser apartir del año 1000',
            'genero.required' => 'El genero es requerido',
            'genero.max' => 'El gerero excede el limite de caracteres',
            'genero.min' => 'El gerero debe tener minimo 3 caracteres',
        ];
    }
}
