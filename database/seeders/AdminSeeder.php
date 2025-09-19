<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Settings\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            [
                'email' => 'a@a.a',
            ],
            [
                'name' => 'Admin',
                'email' => 'a@a.a',
                'password' => Hash::make('aaa'),
                'email_verified_at' => now(),
            ]
        );
    }
}
