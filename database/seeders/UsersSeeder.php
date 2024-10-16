<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            'name' => 'example admin account',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin'),
            'is_admin' => true,
        ]);

        User::insert([
            'name' => 'example user account',
            'email' => 'user@example.com',
            'password' => Hash::make('user'),
        ]);
    }
}
