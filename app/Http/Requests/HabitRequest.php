<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HabitRequest extends FormRequest
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
            'name' => 'required|string|max:255|unique:habits,name',

        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'O nome do hábito é obrigatório.',
            'name.string' => 'O nome do hábito deve ser um texto.',
            'name.max' => 'O nome do hábito não pode exceder 255 caracteres.',
            'name.unique' => 'Você já cadastrou um hábito com esse nome.',
        ];
    }
}
