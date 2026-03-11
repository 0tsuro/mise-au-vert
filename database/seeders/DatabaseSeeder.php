<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            ParametreSeeder::class,
            PensionSeeder::class,
            TypeGardiennageSeeder::class,
            EspeceSeeder::class,
            ProprietaireSeeder::class,
            AnimalSeeder::class,
            DateModelSeeder::class,
            BoxSeeder::class,
            TarificationSeeder::class,
            AffectationSeeder::class,
        ]);
    }
}