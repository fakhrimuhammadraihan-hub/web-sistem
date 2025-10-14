<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tamu;

class TamuSeeder extends Seeder
{
    public function run(): void
    {
        Tamu::create([
            'nama' => 'Fakhri Muhammad',
            'email' => 'fakhri@mail.com',
            'no_telp' => '08123456789',
            'alamat' => 'Jakarta',
            'status' => 'Pending',
        ]);

        Tamu::create([
            'nama' => 'Raihan',
            'email' => 'raihan@mail.com',
            'no_telp' => '08198765432',
            'alamat' => 'Bandung',
            'status' => 'Dihubungi',
        ]);
    }
}
