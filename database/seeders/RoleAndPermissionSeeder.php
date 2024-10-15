<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'dashboard']);
        Permission::create(['name' => 'settings']);

        $adminRole = Role::create(['name' => 'admin']);
        $photographerRole = Role::create(['name' => 'photographer']);
        $userRole = Role::create(['name' => 'user']);

        $adminRole->givePermissionTo([
            'dashboard',
            'settings',
        ]);

        $photographerRole->givePermissionTo([
            'dashboard'
        ]);

        $userRole->givePermissionTo([
            'dashboard'
        ]);
    }
}
