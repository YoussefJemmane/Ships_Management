<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin user
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@marsa.com',
            'password' => Hash::make('admin'), // Hash the password
            'role' => 1, // Assuming 1 is the role ID for admin
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Normal user
        DB::table('users')->insert([
            'name' => 'User',
            'email' => 'user@marsa.com',
            'password' => Hash::make('user'), // Hash the password
            'role' => 0, // Assuming 0 is the role ID for normal user
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
