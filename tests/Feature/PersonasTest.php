<?php

namespace Tests\Feature;

use App\Models\AsistenciaPersonal;
use App\Models\Persona;
use Database\Seeders\PersonasSeeder;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PersonasTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_seeder()
    {
        //Mando a correr el seeder
        $this->seed(PersonasSeeder::class);

        //Cuento el numero de personas en la db
        $personas = Persona::count();
        
        //Verifico si se crearon los 111 usuarios que solicito en el seeder
        $this->assertEquals($personas,111);
    }

    public function test_asistencias_personas(){
        
        //Creo una persona con el factory de Persona
        $persona = Persona::factory()->create([]);

        //Creo dos asistencias con el factory de Asistencia
        AsistenciaPersonal::factory()->times(2)->create([
            'persona_id'    => $persona->id
        ]);

        //Obtengo el numero de asistencias de la persona
        $n_asistencia = $persona->asistencias->count();

        //Verifico si hay 2 asistencias
        $this->assertEquals($n_asistencia, 2);

    }
}
