<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pension;

class PensionSeeder extends Seeder
{
    public function run(): void
    {
        Pension::insert([
            [
                'ville' => 'Saint-Sauveur',
                'adresse' => '10 rue des Animaux',
                'telephone' => '0102030405',
                'responsable' => 'M. Martin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ville' => 'Lille',
                'adresse' => '22 avenue du Parc',
                'telephone' => '0102030406',
                'responsable' => 'Mme Bernard',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ville' => 'Lezoux',
                'adresse' => '5 chemin Vert',
                'telephone' => '0102030407',
                'responsable' => 'Mme Leroy',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}