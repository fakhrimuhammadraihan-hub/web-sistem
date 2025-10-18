<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusSeeder extends Seeder
{
    public function run(): void
    {
        $statuses = [
            ['status' => 'Pending'],
            ['status' => 'Dikonfirmasi'],
            ['status' => 'Ditolak'],
            ['status' => 'Selesai'],
        ];

        foreach ($statuses as $status) {
            Status::create($status);
        }
    }
}