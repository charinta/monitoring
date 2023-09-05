<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        $admin = User::create([
            'username' => 'Admin',
            'npk' => '123',
            'pos' => 'washing',
            'role' => 'admin',
            'password' => bcrypt('admin123'),
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'username' => 'User1',
            'npk' => '222',
            'pos' => 'washing',
            'role' => 'user1',
            'password' => bcrypt('user123'),
        ]);

        $user->assignRole('user1');

        $user = User::create([
            'username' => 'User2',
            'npk' => '333',
            'pos' => 'washing',
            'role' => 'user2',
            'password' => bcrypt('user123'),
        ]);

        $user->assignRole('user2');

        $user = User::create([
            'username' => 'Viewer',
            'npk' => '444',
            'pos' => 'washing',
            'role' => 'viewer',
            'password' => bcrypt('viewer123'),
        ]);

        $user->assignRole('viewer');
    }
}
