<?php

namespace Database\Seeders;

use App\Models\User;
use App\Enums\RoleEnum;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = RoleEnum::cases();

        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('12345678'),
        ]);
        $admin->assignRole(RoleEnum::ADMIN->value);

        $supplier = User::create([
            'name' => 'Supplier',
            'email' => 'supplier@test.com',
            'password' => Hash::make('12345678'),
        ]);
        $supplier->assignRole(RoleEnum::SUPPLIER->value);
    }
}
