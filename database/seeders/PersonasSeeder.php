<?php

namespace Database\Seeders;

use App\Models\Persona;
use Illuminate\Database\Seeder;

class PersonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //MANERAS DE CREAR UNA PERSONA
        $persona = new Persona();
        $persona->nombres = "Jaime";
        $persona->apellidos = "Santana";
        $persona->cedula = "1600392359";
        $persona->edad = 31;
        $persona->email = "sistemas@santana.ec";
        $persona->save();

        //CREAR 100 PERSONAS RANDOMICAS
        Persona::factory()
                ->times(100)
                ->create([]);

        //CREAR 10 PERSONAS DE 18 AÑOS
        Persona::factory()
        ->times(10)
        ->create([
            'edad'  => 18
        ]);
        


    }
}
