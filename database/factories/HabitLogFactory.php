<?php

namespace Database\Factories;

use App\Models\Habit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HabitLog>
 */
class HabitLogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => '1', // cria um usuário para cada registro de hábito
            'habit_id' => Habit::query()->inRandomOrder()->first()->id, // associa o registro de hábito a um hábito existente
            'completed_at' => $this->faker->unique()->dateTimeBetween(startDate: '-1 month', endDate: 'now')->format(format: 'Y-m-d'),
        ];
    }
}
