<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\habit>
 */
class habitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $habits = [
            'Exercício físico',
            'Meditação',
            'Leitura',
            'Escrita',
            'Aprender algo novo',
            'Cozinhar uma refeição saudável',
            'Praticar um hobby',
            'Dormir cedo',
            'Beber mais água',
            'Organizar o ambiente',
        ];

        return [
            'user_id' => '1', // cria um usuário para cada hábito
            'name' => $this->faker->unique()->randomElement($habits),
        ];
    }
}
