<?php

namespace Database\Factories;

use App\Models\Capacitacion;
use App\Models\Persona;
use Illuminate\Database\Eloquent\Factories\Factory;

class CapacitacionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Capacitacion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $personas = Persona::select('id')->get();
        
        //$persona = $this->faker->randomElement($personas);
        //dd($persona, $persona->id);
        return [
            'persona_id' => $this->faker->randomElement($personas)->id,
            'fecha' => $this->faker->date,
            'nombre' => $this->faker->userName,
            'horas' => rand(10,50),
            'lugar' => $this->faker->city,
            'institucion'   => $this->faker->company
        ];
    }
}
