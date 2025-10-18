<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    use HasFactory;

    protected $primaryKey = 'tamu_id';

    protected $fillable = [
        'tanggal',
        'nama_siswa',
        'asal_sekolah',
        'nama_orangtua',
        'phone_orangtua',
        'keterangan',
        'pantita_id',
        'status_id'
    ];

    protected $casts = [
        'tanggal' => 'date',
    ];

    public function pantita()
    {
        return $this->belongsTo(User::class, 'pantita_id', 'user_id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id', 'status_id');
    }
}