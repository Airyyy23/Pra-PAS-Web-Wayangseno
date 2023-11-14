<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang
{
    private static $barang = [
        [
            'id' => 18,
            'nama_barang' => 'Laptop',
            'kategori' => 'Elektronik',
            'harga' => 2500000,
            'stok' => 10,
            'tanggal_masuk' => '2023-01-01',
        ],
        [
            'id' => 28,
            'nama_barang' => 'Mouse',
            'kategori' => 'Aksesori Komputer',
            'harga' => 20000,
            'stok' => 50,
            'tanggal_masuk' => '2023-02-15',
        ],
        [
            'id' => 38,
            'nama_barang' => 'Buku',
            'kategori' => 'Peralatan Kantor',
            'harga' => 10500,
            'stok' => 100,
            'tanggal_masuk' => '2023-03-10',
        ],
        [
            'id' => 48,
            'nama_barang' => 'Kamera',
            'kategori' => 'Fotografi',
            'harga' => 1200000,
            'stok' => 5,
            'tanggal_masuk' => '2023-04-20',
        ],
        [
            'id' => 58,
            'nama_barang' => 'Kursi',
            'kategori' => 'Perabotan',
            'harga' => 50000,
            'stok' => 20,
            'tanggal_masuk' => '2023-05-05',
        ]
    ];

        public static function all()
        {
            return self::$barang;
        }
}
