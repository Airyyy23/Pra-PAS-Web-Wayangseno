<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'pelanggan';

    protected $fillable = [
        'nama_pelanggan',
        'alamat',
        'email',
        'telepon',
        'tanggal_registrasi',
    ];
}
