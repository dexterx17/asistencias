<?php

namespace Database\Seeders;

use App\Models\AsistenciaPersonal;
use Illuminate\Database\Seeder;

class AsistenciasPersonalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //CREAR 10 ASISTENCIAS
        AsistenciaPersonal::factory()
        ->times(100)
        ->create([]);
    }
}
