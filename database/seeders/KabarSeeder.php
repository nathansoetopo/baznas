<?php

namespace Database\Seeders;

use App\Models\KabarModel;
use App\Models\KabarZakat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KabarSeeder extends Seeder
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
                'judul' => 'Gaopo dik, ayu iku pilihan',
                'deskripsi' => 'Gaopo dik, ayu iku pilihan',
                'gambar' => 'uploads/galeri/mikel.jpeg',
                'penulis' => 1,
                'kategori' => 5,
            ],
            [
                'judul' => 'Koe kok iso geh iku pie tan',
                'deskripsi' => 'Gaopo tan, ayu iku pilihan',
                'gambar' => 'uploads/galeri/mikel.jpeg',
                'penulis' => 1,
                'kategori' => 5,
            ],
            [
                'judul' => 'Gak ngono a cel hehehehehe?',
                'deskripsi' => 'Gaopo cel, ayu iku pilihan',
                'gambar' => 'uploads/galeri/mikel.jpeg',
                'penulis' => 1,
                'kategori' => 5,
            ],
            [
                'judul' => 'Gaopo dik, ayu iku pilihan',
                'deskripsi' => 'Gaopo dik, ayu iku pilihan',
                'gambar' => 'uploads/galeri/mikel.jpeg',
                'penulis' => 1,
                'kategori' => 5,
            ],
            [
                'judul' => 'Koe kok iso geh iku pie tan',
                'deskripsi' => 'Gaopo tan, ayu iku pilihan',
                'gambar' => 'uploads/galeri/mikel.jpeg',
                'penulis' => 1,
                'kategori' => 6,
            ],
            [
                'judul' => 'Gak ngono a cel hehehehehe?',
                'deskripsi' => 'Gaopo cel, ayu iku pilihan',
                'gambar' => 'uploads/galeri/mikel.jpeg',
                'penulis' => 1,
                'kategori' => 6,
            ],
            [
                'judul' => 'Koe kok iso geh iku pie tan',
                'deskripsi' => 'Gaopo tan, ayu iku pilihan',
                'gambar' => 'uploads/galeri/mikel.jpeg',
                'penulis' => 1,
                'kategori' => 6,
            ],
            [
                'judul' => 'Gak ngono a cel hehehehehe?',
                'deskripsi' => 'Gaopo cel, ayu iku pilihan',
                'gambar' => 'uploads/galeri/mikel.jpeg',
                'penulis' => 1,
                'kategori' => 6,
            ],
            [
                'judul' => 'Koe kok iso geh iku pie tan',
                'deskripsi' => 'Gaopo tan, ayu iku pilihan',
                'gambar' => 'uploads/galeri/mikel.jpeg',
                'penulis' => 1,
                'kategori' => 7,
            ],
            [
                'judul' => 'Gak ngono a cel hehehehehe?',
                'deskripsi' => 'Gaopo cel, ayu iku pilihan',
                'gambar' => 'uploads/galeri/mikel.jpeg',
                'penulis' => 1,
                'kategori' => 7,
            ],
            [
                'judul' => 'Koe kok iso geh iku pie tan',
                'deskripsi' => 'Gaopo tan, ayu iku pilihan',
                'gambar' => 'uploads/galeri/mikel.jpeg',
                'penulis' => 1,
                'kategori' => 7,
            ],
            [
                'judul' => 'Gak ngono a cel hehehehehe?',
                'deskripsi' => 'Gaopo cel, ayu iku pilihan',
                'gambar' => 'uploads/galeri/mikel.jpeg',
                'penulis' => 1,
                'kategori' => 7,
            ],
        ])->each(function($kabar){
            KabarModel::create($kabar);
        });
    }
}
