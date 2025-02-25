<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UpdateDatabase extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = \App\Models\Role::create(['name' => 'Super Administrator']);

        $admin = \App\Models\User::factory()->create([
            'name' => 'Demo User',
            'email' => 'demo@gmail.com',
            'password' => bcrypt('password'),
        ]);
        $admin->assignRole($role);
    }
}
