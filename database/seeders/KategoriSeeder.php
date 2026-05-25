<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategoriList = [

            [
                'nama_kategori' => 'Programming',
                'deskripsi' => 'Kategori buku tentang pemrograman',
                'icon' => 'code-slash',
                'warna' => 'primary',
            ],

            [
                'nama_kategori' => 'Database',
                'deskripsi' => 'Kategori buku tentang database',
                'icon' => 'database',
                'warna' => 'success',
            ],

            [
                'nama_kategori' => 'Web Design',
                'deskripsi' => 'Kategori buku tentang desain web',
                'icon' => 'palette',
                'warna' => 'info',
            ],

            [
                'nama_kategori' => 'Networking',
                'deskripsi' => 'Kategori buku tentang jaringan komputer',
                'icon' => 'wifi',
                'warna' => 'warning',
            ],

            [
                'nama_kategori' => 'Data Science',
                'deskripsi' => 'Kategori buku tentang data science',
                'icon' => 'graph-up',
                'warna' => 'danger',
            ],

        ];

        foreach ($kategoriList as $kategori) {
            Kategori::create($kategori);
        }
    }
}