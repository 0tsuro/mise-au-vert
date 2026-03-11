<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Box;

class BoxSeeder extends Seeder
{
    public function run(): void
    {
        Box::insert([
            [
                'superficie' => 12,
                'pension_id' => 1,
                'type_gardiennage_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'superficie' => 8,
                'pension_id' => 1,
                'type_gardiennage_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'superficie' => 6,
                'pension_id' => 2,
                'type_gardiennage_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}