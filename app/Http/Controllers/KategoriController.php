<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    // Daftar kategori
    public function index()
    {
        $kategori_list = [

            [
                'id' => 1,
                'nama' => 'Programming',
                'deskripsi' => 'Buku pemrograman dan coding',
                'jumlah_buku' => 25
            ],

            [
                'id' => 2,
                'nama' => 'Database',
                'deskripsi' => 'Buku database dan SQL',
                'jumlah_buku' => 18
            ],

            [
                'id' => 3,
                'nama' => 'Web Design',
                'deskripsi' => 'Buku desain website',
                'jumlah_buku' => 12
            ],

            [
                'id' => 4,
                'nama' => 'Networking',
                'deskripsi' => 'Buku jaringan komputer',
                'jumlah_buku' => 10
            ],

            [
                'id' => 5,
                'nama' => 'Cyber Security',
                'deskripsi' => 'Buku keamanan sistem',
                'jumlah_buku' => 7
            ]
        ];

        return view('kategori.index', compact('kategori_list'));
    }

    // Detail kategori
    public function show($id)
    {
        $kategori = [
            'id' => $id,
            'nama' => 'Programming',
            'deskripsi' => 'Buku pemrograman dan coding',
            'jumlah_buku' => 25
        ];

        $buku_list = [

            [
                'judul' => 'Laravel Dasar',
                'pengarang' => 'Budi Raharjo',
                'harga' => 90000
            ],

            [
                'judul' => 'PHP Modern',
                'pengarang' => 'Andi Nugroho',
                'harga' => 85000
            ],

            [
                'judul' => 'JavaScript Expert',
                'pengarang' => 'Rina Wijaya',
                'harga' => 95000
            ]
        ];

        return view('kategori.show', compact('kategori', 'buku_list'));
    }

    // Search kategori
    public function search($keyword)
    {
        $kategori_list = [

            [
                'id' => 1,
                'nama' => 'Programming',
                'deskripsi' => 'Buku pemrograman dan coding',
                'jumlah_buku' => 25
            ],

            [
                'id' => 2,
                'nama' => 'Database',
                'deskripsi' => 'Buku database dan SQL',
                'jumlah_buku' => 18
            ]
        ];

        return view('kategori.search', compact('kategori_list', 'keyword'));
    }
}