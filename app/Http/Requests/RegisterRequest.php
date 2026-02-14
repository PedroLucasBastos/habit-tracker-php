<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|max:255|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:60|confirmed',

        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'O campo é obrigatorio',
            'name.max' => 'O campo deve conter no maximo 255 caracteres',
            'name.string' => 'O campo deve ser um texto',
            'email.required' => 'O campo é obrigatorio',
            'email.email' => 'O campo deve ser um email valido',
            'email.unique' => 'O email já está em uso',
            'password.required' => 'O campo é obrigatorio',
            'password.min' => 'O campo deve conter no minimo 6 caracteres',
            'password.max' => 'O campo deve conter no maximo 60 caracteres',
            'password.confirmed' => 'As senhas não coincidem',
        ];
    }
}
