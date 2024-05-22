<?php

namespace Database\Seeders;

use GreenField\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::firstOrCreate(
            ['email' => 'prince@xyruscode.com.ng'],
            [
                'first_name' => 'Xyrus',
                'last_name' => 'Code',
                'password' => Hash::make('demoPass'),
                'role' => 'super-admin',
            ]
        );

        User::firstOrCreate(
            ['email' => 'admin@greenfieldedu.com'],
            [
                'first_name' => 'Admin',
                'last_name' => 'Regular',
                'role' => 'admin',
                'password' => Hash::make('demoPass'),
            ]
        );
    }
}
