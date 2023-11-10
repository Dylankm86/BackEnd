<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeVoertuigenTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('type_voertuigen')->insert([
            ['type_voertuig' => 'Personenauto', 'rijbewijs_categorie' => 'B'],
            ['type_voertuig' => 'Vrachtwagen', 'rijbewijs_categorie' => 'C'],
            ['type_voertuig' => 'Bus', 'rijbewijs_categorie' => 'D'],
            ['type_voertuig' => 'Bromfiets', 'rijbewijs_categorie' => 'AM'],
        ]);
    }
}
