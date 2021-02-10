<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Curso;

class CursoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Curso::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tipoCurso' => $this->faker->randomElement(['CAI', 'TEC']),
            'siglaCurso' => $this->faker->word(),
            'nomeCurso' => $this->faker->sentence(3),
            'dataInicioCurso' => $this->faker->date(),
            'dataFimCurso' => $this->faker->date(),
            'cargaTotalHoras' => $this->faker->randomNumber(2),
        ];
    }
}
