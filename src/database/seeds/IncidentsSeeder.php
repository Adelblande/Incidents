<?php

use Illuminate\Database\Seeder;
use App\Incidents;

class IncidentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($x = 1; $x < 13; $x++) {
            Incidents::create([
                "title" => "Incidente $x",
                "description" => "Descrição do Incidente $x",
                "criticality" => "Baixa",
                "type_incident_id" => 4
            ]);
        }
    }
}
