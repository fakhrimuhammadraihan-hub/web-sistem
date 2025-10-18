<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $primaryKey = 'status_id';

    // Tentukan nama tabel secara eksplisit
    protected $table = 'status';

    protected $fillable = ['status'];

    public $timestamps = false; // Jika Anda tidak menggunakan timestamps

    public function tamus()
    {
        return $this->hasMany(Tamu::class, 'status_id', 'status_id');
    }
}