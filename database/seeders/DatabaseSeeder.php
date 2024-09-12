<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'usertype' => 'admin',
            'password' => Hash::make('123456789'),
        ]);
        User::factory()->create([
            'name' => 'user',
            'username' => 'user',
            'email' => 'user@user.com',
            'usertype' => 'user',
            'password' => Hash::make('123456789'),
        ]);
    }
}
