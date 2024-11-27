<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @param $admin
     */
    public function run(): void
    {
        // Admin foydalanuvchisini yaratish
        $admin = User::create([
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'username' => 'admin123',
            'email' => 'johndoe@example.com',
            'password' => Hash::make('secret'),
        ]);

        // Admin foydalanuvchiga ro‘llarni bog‘lash (masalan, 1 - admin ro‘li)
        $admin->roles()->attach(1);

        // 10 ta foydalanuvchini yaratish va ularga ro‘lni bog‘lash
        User::factory()
            ->count(10)
            ->create()
            ->each(function ($user) {
                $user->roles()->attach(2); // 2 - oddiy foydalanuvchi ro‘li
            });
    }


}
