<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::create([
            'first_name' => "Admin",
            'last_name' => "Admin",
            'email' => "admin@admin.com",
            'phone' => "+998973921572",
            'password' => Hash::make('secret123'),
        ]);

        $admin->roles()->attach(1);

        User::factory()->count(10)->hasAttached([Role::find(2)])->create();
    }
}
