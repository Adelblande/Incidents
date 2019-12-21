<?php

use Illuminate\Database\Seeder;
use App\TypeIncident;

class TypeIncidentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mtz = array(
            'Ataque Brute Force',
            'Credencias vazadas',
            'Ataque de DDoS',
            'Atividades anormais de usuários'
        );

        foreach($mtz as $valor) {
            TypeIncident::create([
                'type' => $valor
            ]);
        }

    }
}
