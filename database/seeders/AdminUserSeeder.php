<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use Spatie\Permission\Models\Role;

class AdminUserSeeder extends Seeder
{
    public function run()
    {

        // Crea el usuario administrador
        $adminUser = User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make(env('ADMIN_SECRET')),
        ]);

        // Asigna el rol de administrador al usuario
        $adminRole = Role::where('name', 'Admin')->first();
        $adminUser->assignRole($adminRole);

        Log::info('Usuario administrador creado.');
    }
}
