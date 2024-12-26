<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use App\Models\UserData;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //$user = User::factory()->create();

        /*Role::factory()->create([
            'role_name' => 'admin',
            'deleted_at' => null
        ]);

        Role::factory()->create([
            'role_name' => 'sub_admin',
            'deleted_at' => null
        ]);

        Role::factory()->create([
            'role_name' => 'instructor',
            'deleted_at' => null
        ]);

        Role::factory()->create([
            'role_name' => 'member',
            'deleted_at' => null
        ]);*/

        //$roles = Role::factory(3)->create();
        //$users = User::factory(3)->hasAttached($roles)->create();
        UserData::factory(20)->create();

        /*Role::factory()->create();

        Permission::factory()->create();*/

        /*Role::factory()->create([
            'role_name' => 'admin',
            'deleted_at' => null
        ]);

        Role::factory()->create([
            'role_name' => 'sub_admin',
            'deleted_at' => null
        ]);

        Role::factory()->create([
            'role_name' => 'instructor',
            'deleted_at' => null
        ]);

        Role::factory()->create([
            'role_name' => 'member',
            'deleted_at' => null
        ]);


        Permission::factory()->create([
            'permission_name' => 'user',
            'decription' => null,
            'deleted_at' => null,
            'is_active' => 1
        ]);

        
        Permission::factory()->create([
            'permission_name' => 'courses',
            'decription' => null,
            'deleted_at' => null,
            'is_active' => 1
        ]);

        
        Permission::factory()->create([
            'permission_name' => 'payments',
            'decription' => null,
            'deleted_at' => null,
            'is_active' => 1
        ]);

        
        Permission::factory()->create([
            'permission_name' => 'configuration',
            'decription' => null,
            'deleted_at' => null,
            'is_active' => 1
        ]);

        
        Permission::factory()->create([
            'permission_name' => 'reports',
            'decription' => null,
            'deleted_at' => null,
            'is_active' => 1
        ]);*/

    }
}
