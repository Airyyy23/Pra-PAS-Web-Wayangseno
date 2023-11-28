<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin
{
    private static $admin = [
        [
            [
                'id' => 98,
                'nama_admin' => 'Ilhami',
                'alamat' => 'Jl. Ilhami No. 123',
                'email' => 'ilhami@email.com',
                'telepon' => '1234567890',
            ],
            [
                'id' => 88,
                'nama_admin' => 'Nando',
                'alamat' => 'Jl. Nando No. 456',
                'email' => 'nando@email.com',
                'telepon' => '9876543210',
            ],
            [
                'id' => 78,
                'nama_admin' => 'Zidni',
                'alamat' => 'Jl. Zidni No. 789',
                'email' => 'zidni@email.com',
                'telepon' => '5556667777',
            ],
            [
                'id' => 68,
                'nama_admin' => 'Arya',
                'alamat' => 'Jl. Arya No. 321',
                'email' => 'arya@email.com',
                'telepon' => '1112223333',
            ],
            [
                'id' => 58,
                'nama_admin' => 'Fuad',
                'alamat' => 'Jl. Fuad No. 654',
                'email' => 'fuad@email.com',
                'telepon' => '9998887777',
            ]
        ]
    ];

    public static function all()
        {
            return self::$admin;
        }
}