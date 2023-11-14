<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan
{
    private static $pelanggan = [
        [
            'id' => 18,
            'nama_pelanggan' => 'John Doe',
            'alamat' => 'Jl. Contoh No. 123',
            'email' => 'john.doe@email.com',
            'telepon' => '1234567890',
            'tanggal_registrasi' => '2023-01-10'
        ],
        [
            'id' => 28,
            'nama_pelanggan' => 'Jane Doe',
            'alamat' => 'Jl. Sample No. 456',
            'email' => 'jane.doe@email.com',
            'telepon' => '9876543210',
            'tanggal_registrasi' => '2023-02-20'
        ],
        [
            'id' => 38,
            'nama_pelanggan' => 'Bob Smith',
            'alamat' => 'Jl. Demo No. 789',
            'email' => 'bob.smith@email.com',
            'telepon' => '5556667777',
            'tanggal_registrasi' => '2023-03-15'
        ],
        [
            'id' => 48,
            'nama_pelanggan' => 'Alice Johnson',
            'alamat' => 'Jl. Test No. 321',
            'email' => 'alice.johnson@email.com',
            'telepon' => '1112223333',
            'tanggal_registrasi' => '2023-04-05'
        ],
        [
            'id' => 58,
            'nama_pelanggan' => 'Charlie Brown',
            'alamat' => 'Jl. Example No. 654',
            'email' => 'charlie.brown@email.com',
            'telepon' => '9998887777',
            'tanggal_registrasi' => '2023-05-25'
        ]
    ];

        public static function all()
        {
            return self::$pelanggan;
        }
}
