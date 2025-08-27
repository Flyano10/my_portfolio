<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Rafly Admin',
            'email' => 'admin@rafly.com',
            'password' => Hash::make('admin123'),
            'email_verified_at' => now(),
        ]);
    }
}