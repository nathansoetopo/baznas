<?php

namespace Database\Seeders;

use App\Models\CategoryData as Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoryData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            [
                'name' => 'fitrah',
                'display' => 'Fitrah',
                'jenis' => 'laporan',
            ],
            [
                'name' => 'infaq',
                'display' => 'Infaq',
                'jenis' => 'laporan',
            ],
            [
                'name' => 'sedekah',
                'display' => 'Sedekah',
                'jenis' => 'laporan',
            ],
            [
                'name' => 'fidyah',
                'display' => 'Fidyah',
                'jenis' => 'laporan',
            ],
            [
                'name' => 'zakat',
                'display' => 'Kabar Zakat',
                'jenis' => 'kabar',
            ],
            [
                'name' => 'artikel',
                'display' => 'Artikel',
                'jenis' => 'kabar',
            ],
            [
                'name' => 'inspirasi',
                'display' => 'Inspirasi',
                'jenis' => 'kabar',
            ],
        ])->each(function ($data) {
            Category::create($data);
        });
    }
}
