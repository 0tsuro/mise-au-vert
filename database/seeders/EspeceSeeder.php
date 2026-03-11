<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Espece;

class EspeceSeeder extends Seeder
{
    public function run(): void
    {
        Espece::insert([
            ['libelle' => 'Chien', 'created_at' => now(), 'updated_at' => now()],
            ['libelle' => 'Chat', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}