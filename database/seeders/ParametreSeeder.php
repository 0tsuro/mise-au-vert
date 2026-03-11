<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Parametre;

class ParametreSeeder extends Seeder
{
    public function run(): void
    {
        Parametre::create([
            'nom' => 'Mise au Vert',
            'adresse_siege_social' => '123 rue du Siège Social',
            'nom_dirigeant' => 'Mme Dupont',
            'adresse_logo' => 'logo.png',
            'prix_vaccin' => 25.00,
            'prix_vermifuge' => 15.00,
        ]);
    }
}