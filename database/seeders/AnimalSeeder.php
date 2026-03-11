<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Animal;

class AnimalSeeder extends Seeder
{
    public function run(): void
    {
        Animal::insert([
            [
                'nom' => 'Rex',
                'espece_id' => 1,
                'proprietaire_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Mia',
                'espece_id' => 2,
                'proprietaire_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}