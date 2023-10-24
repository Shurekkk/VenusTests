<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Grupo>
 */
class GrupoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nome' => fake()->name(),
            //'name' => fake()->name(),
            'id_dia_semana' => fake()->numberBetween(1, 7),
            'hr_inicio' => fake()->time(),
            'hr_fim' => fake()->time(),
            'ativo' => fake()->boolean(),
            'nr_vagas' => fake()->numberBetween(0, 10),
            'id_tipo_grupo' => fake()->numberBetween(1, 5),
            'nr_trabalhadores' => fake()->numberBetween(0, 5),
            'id_sala' => fake()->numberBetween(1, 10),
        ];
    }
}
