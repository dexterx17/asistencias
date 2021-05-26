<?php

namespace Database\Factories;

use App\Models\AsistenciaPersonal;
use Illuminate\Database\Eloquent\Factories\Factory;

class AsistenciaPersonalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AsistenciaPersonal::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'persona_id' => rand(1,100),
            'fecha_ingreso' => $this->faker->dateTime,
            'fecha_salida' => $this->faker->dateTime,
        ];
    }
}
