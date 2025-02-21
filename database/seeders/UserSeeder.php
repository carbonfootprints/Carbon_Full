<?php

namespace Database\Seeders;

use App\Models\User;
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
                'role' => 0,
                'password' => Hash::make('12345678'),
            ]
        );

        // SuperAdmin User
        User::updateOrCreate(
            ['email' => 'superadmin@mail.com'],
            [
                'name' => 'SuperAdmin User',
                'role' => 1,
                'password' => Hash::make('12345678'),
            ]
        );

        // Regular User
        User::updateOrCreate(
            ['email' => 'user@mail.com'],
            [
                'name' => 'Regular User',
                'role' => 2,
                'password' => Hash::make('12345678'),
            ]
        );
    }
}
