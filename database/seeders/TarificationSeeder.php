<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tarification;

class TarificationSeeder extends Seeder
{
    public function run(): void
    {
        Tarification::insert([
            [
                'pension_id' => 1,
                'type_gardiennage_id' => 1,
                'tarif' => 20.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pension_id' => 1,
                'type_gardiennage_id' => 2,
                'tarif' => 15.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pension_id' => 2,
                'type_gardiennage_id' => 3,
                'tarif' => 18.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}