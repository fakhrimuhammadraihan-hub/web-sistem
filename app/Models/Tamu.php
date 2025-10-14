<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    use HasFactory;

    // sesuaikan field dengan kolom pada migration
    protected $fillable = [
        'nama',
        'email',
        'no_telp',
        'alamat',
        'instansi',
        'tujuan',
        'status'
    ];
}
