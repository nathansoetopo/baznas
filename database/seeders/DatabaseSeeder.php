<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            CategoryData::class,
            KabarSeeder::class,
            // KabarSeeder::class,
            // InspirasiSeeder::class,
            // ArtikelSeeder::class,
            GaleriSeeder::class,
            PenyaluranSeeder::class,
            // CategoryData::class,
            DataZisSeeder::class,
        ]);
    }
}
