<?php

namespace Database\Seeders;

use App\Models\Settings\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Settings\User;
use App\Models\Tenancy\Team;
use Illuminate\Support\Facades\Artisan;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::updateOrCreate(
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

        $team = Team::updateOrCreate(
            [
                'name' => 'Core Team',
            ],
            [
                'slug' => 'core-team',
            ]
        );

        $user->teams()->syncWithoutDetaching([$team->id]);

        Artisan::call('shield:install admin');
        Artisan::call('shield:super-admin --panel=admin');

        Role::where('name', 'super_admin')->update([
            'team_id' => $team->id,
        ]);
    }
}
