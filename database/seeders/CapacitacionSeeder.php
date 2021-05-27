<?php

namespace Database\Seeders;

use App\Models\Capacitacion;
use Illuminate\Database\Seeder;

class CapacitacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $capacitaciones = Capacitacion::factory(10)->create([]);
    }
}
