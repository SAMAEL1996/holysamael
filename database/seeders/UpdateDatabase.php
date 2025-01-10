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
        $this->call([
            PermissionSeeder::class,
            CardSeeder::class,
        ]);

        $role = \App\Models\Role::create(['name' => 'Super Administrator']);

        $staffRole = \App\Models\Role::create(['name' => 'Staff']);
        $staffRole->syncPermissions([
            'view staff',
            'create staff',
            'edit staff',
            'delete staff',
            'view cards',
            'view daily-sales',
            'create daily-sales',
            'edit daily-sales',
            'delete daily-sales',
            'generate daily-sales',
            'export daily-sales',
            'view monthly-users',
            'create monthly-users',
            'edit monthly-users',
            'delete monthly-users',
            'view flexi-users',
            'create flexi-users',
            'edit flexi-users',
            'delete flexi-users',
            'view reports',
            'create reports',
            'edit reports',
            'delete reports',
            'export reports',
            'view sale-reports',
            'create sale-reports',
            'edit sale-reports',
            'delete sale-reports',
            'view attendances',
            'export attendances',
            'view profiles',
            'create profiles',
            'edit profiles',
            'delete profiles',
            'view staff-profile',
            'edit conferences',
            'add conference-guests',
            'approve conferences',
            'create conferences',
            'view conferences'
        ]);

        $admin = \App\Models\User::factory()->create([
            'name' => 'Demo User',
            'email' => 'demo@gmail.com',
            'password' => bcrypt('password'),
        ]);
        $admin->assignRole($role);

        $staffUser = \App\Models\User::factory()->create([
            'name' => 'Demo Staff',
            'email' => 'demostaff@gmail.com',
            'is_staff' => true,
            'status' => true,
            'password' => bcrypt('password'),
        ]);
        $staffUser->staff()->create([
            'card_id' => \App\Models\Card::where('type', 'Staff')->first()->id,
            'personal_email' => $staffUser->email,
            'is_active' => true,
            'emergency_contact_person' => $admin->name,
            'emergency_relationship' => 'User',
            'emergency_contact_no' => '09999999999',
        ]);
        $staffUser->assignRole($staffRole);
    }
}
