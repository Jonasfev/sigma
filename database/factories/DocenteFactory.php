<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Docente;

class DocenteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Docente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nome' => $this->faker->firstName(),
            'Sobrenome' => $this->faker->lastName,
            'hMax' => $this->faker->randomNumber(2),
            'hMin' => $this->faker->randomNumber(2),
        ];
    }
}
