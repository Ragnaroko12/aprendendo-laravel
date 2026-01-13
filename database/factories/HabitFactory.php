<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class HabitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $habits =[
            'beber agua',
            'fazer exercicio',
            'meditar',
            'ler um livro',
            'dormir cedo',
            'estudar programação',
            'praticar um hobby',
            'alimentar-se saudavelmente',
            'manter o ambiente limpo',
            'socializar com amigos',
            'aprender algo novo',
            'economizar dinheiro',
            'organizar o dia',
            'evitar procrastinação',
            'praticar gratidão',
        ];

        return [
            'user_id' => 1,
            'name' => $this->faker->unique()->randomElement($habits),
        ];
    }
}
