<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Affectation;

class AffectationSeeder extends Seeder
{
    public function run(): void
    {
        Affectation::insert([
            [
                'date_id' => 1,
                'animal_id' => 1,
                'box_id' => 1,
                'date_fin' => '2026-03-15',
                'regle' => true,
                'carnet_vaccination' => true,
                'poids' => 18.5,
                'age' => 4,
                'vaccin_a_jour' => true,
                'vermifuge_a_jour' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'date_id' => 2,
                'animal_id' => 2,
                'box_id' => 3,
                'date_fin' => '2026-03-14',
                'regle' => false,
                'carnet_vaccination' => true,
                'poids' => 4.2,
                'age' => 2,
                'vaccin_a_jour' => true,
                'vermifuge_a_jour' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}