<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Proprietaire;

class ProprietaireSeeder extends Seeder
{
    public function run(): void
    {
        Proprietaire::insert([
            [
                'nom' => 'Durand',
                'prenom' => 'Paul',
                'adresse' => '1 rue de Lille',
                'telephone' => '0600000001',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Petit',
                'prenom' => 'Claire',
                'adresse' => '2 rue de Paris',
                'telephone' => '0600000002',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}