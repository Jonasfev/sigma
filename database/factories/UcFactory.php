<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Uc;
use Illuminate\Support\Str;

class UcFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Uc::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'siglaUC' => Str::random(3),
            'nomeUC' => $this->faker->sentence(3),
            'cargaSemanal' => $this->faker->randomNumber(2),
            'aulasSemanais' => $this->faker->randomNumber(2),
        ];
    }
}
