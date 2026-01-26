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
        // Create main user
        User::create([
            'name' => 'Gamma Estu Mahardika',
            'email' => 'gammaestu05@gmail.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
        ]);

        // Create additional users
        User::create([
            'name' => 'Alexa Liras',
            'email' => 'alexa@company.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
        ]);

        User::create([
            'name' => 'Laurent Perrier',
            'email' => 'laurent@company.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
        ]);
    }
}
