<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dueño>
 */
class DueñoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->name,
            'tipo_id' => $this->faker->word,
            'identificacion' => $this->faker->numberBetween(1111111,9999999),
            'edad' => $this->faker->numberBetween(18,99),
            'correo' => $this->faker->safeEmail,
            'telefono' => $this->faker->numberBetween(1111111,9999999),
        ];
    }
}
