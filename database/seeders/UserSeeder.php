<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'id' => 1,
                'id_user' => 'U0001',
                'name' => 'Admin',
                'email' => 'admin@mail.com',
                'no_hp' => '081111000111',
                'alamat' => 'Solo',
                'email_verified_at' => now(),
                'password' => bcrypt('admin'),
                'role' => 'admin',
                'active' => true,
                'remember_token' => Str::random(10),
            ],
            [
                'id' => 2,
                'id_user' => 'U0002',
                'name' => 'User1',
                'email' => 'user1@mail.com',
                'no_hp' => '081111000222',
                'alamat' => 'Solo',
                'email_verified_at' => now(),
                'password' => bcrypt('user1'),
                'role' => 'user',
                'active' => true,
                'remember_token' => Str::random(10),
            ],
        ];

        User::insert($users);
    }
}