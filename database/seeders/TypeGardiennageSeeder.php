<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TypeGardiennage;

class TypeGardiennageSeeder extends Seeder
{
    public function run(): void
    {
        TypeGardiennage::insert([
            ['libelle' => 'Hôtel canin', 'created_at' => now(), 'updated_at' => now()],
            ['libelle' => 'Camping canin', 'created_at' => now(), 'updated_at' => now()],
            ['libelle' => 'Pension féline', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}