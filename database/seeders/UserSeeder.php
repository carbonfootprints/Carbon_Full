<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin User
        User::updateOrCreate(
            ['email' => 'admin@mail.com'],
            [
                'name' => 'Admin User',
                'user_type' => 'admin',
                'password' => Hash::make('12345678'),
            ]
        );

        // Regular User
        User::updateOrCreate(
            ['email' => 'user@mail.com'],
            [
                'name' => 'Regular User',
                'user_type' => 'user',
                'password' => Hash::make('12345678'),
            ]
        );
    }
}
