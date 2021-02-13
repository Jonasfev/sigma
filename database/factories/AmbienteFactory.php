<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Ambiente;
use Illuminate\Support\Str;

class AmbienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Ambiente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Tipo' => $this->faker->randomElement(['Lab', 'Ofc', 'Sala']),
            'numAmbiente' => $this->faker->unique()->randomNumber(3),
            'alunosComportados' => $this->faker->randomNumber(2),
        ];
    }
}
