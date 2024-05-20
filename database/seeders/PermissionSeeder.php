<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::create(["name" => "admin"]);
        $cortadorRole = Role::create(["name" => "cortador"]);

        Permission::create(["name" => "administrar usuarios"])->assignRole($adminRole);
        Permission::create(["name" => "administrar roles"])->assignRole($adminRole);
        Permission::create(["name" => "administrar permisos"])->assignRole($adminRole);
        Permission::create(["name" => "administrar coordenadas"])->assignRole($adminRole, $cortadorRole);
    }
}
