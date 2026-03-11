<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DateModel;

class DateModelSeeder extends Seeder
{
    public function run(): void
    {
        DateModel::insert([
            ['date' => '2026-03-11', 'created_at' => now(), 'updated_at' => now()],
            ['date' => '2026-03-12', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}