<?php

namespace Database\Factories;

use App\Models\AsistenciaPersonal;
use App\Models\Persona;
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
        //obtengos los ids de todas las personas
        $personas = Persona::select('id')->get();
        
        return [
            //selecciono una persona aleatoria y accedo a su ->id
            'persona_id' => $this->faker->randomElement($personas)->id,
            'fecha_ingreso' => $this->faker->dateTime,
            'fecha_salida' => $this->faker->dateTime,
        ];
    }
}
