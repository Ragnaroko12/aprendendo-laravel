<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     *
     * determina quais usuários estão autorizados a fazer esta solicitação.
     */
    public function authorize(): bool
    {
        // apenas retornar true para permitir todas as solicitações de login
        return true;
    }

    /**
     * é o conjunto de regras de validação aplicadas à solicitação.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min:4|max:60',
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => 'O campo de email é obrigatório.',
            'email.email' => 'Por favor, insira um endereço de email válido.',
            'password.required' => 'O campo de senha é obrigatório.',
            'password.min' => 'A senha deve ter pelo menos :min caracteres.',
            'password.max' => 'A senha não deve exceder :max caracteres.',
        ];
    }
}
