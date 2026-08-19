<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
public function run(): void
    {
        User::insert([
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'email_verified_at' => now(),
                'is_new' => false,
                'status' => 'active',
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Juan Dela Cruz',
                'email' => 'juan@example.com',
                'email_verified_at' => now(),
                'is_new' => true,
                'status' => 'active',
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Maria Santos',
                'email' => 'maria@example.com',
                'email_verified_at' => now(),
                'is_new' => true,
                'status' => 'active',
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pedro Reyes',
                'email' => 'pedro@example.com',
                'email_verified_at' => now(),
                'is_new' => false,
                'status' => 'active',
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ana Garcia',
                'email' => 'ana@example.com',
                'email_verified_at' => now(),
                'is_new' => true,
                'status' => 'inactive',
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
