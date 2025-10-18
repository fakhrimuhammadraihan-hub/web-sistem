<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@example.com',
            'phone' => '081234567890',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Panitia 1',
            'email' => 'panitia1@example.com',
            'phone' => '081234567891',
            'password' => Hash::make('password'),
        ]);
    }
}