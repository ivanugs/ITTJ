<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    public function run()
    {
        // Admin
        Role::firstOrCreate(['name' => 'Admin']);
        // Desarrollador
        Role::firstOrCreate(['name' => 'Desarrollador']);
        // Capturista
        Role::firstOrCreate(['name' => 'Capturista']);
        // Consulta
        Role::firstOrCreate(['name' => 'Consulta']);
    }
}
