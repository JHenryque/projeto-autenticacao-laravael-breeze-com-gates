<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'administrator',
                'email' => 'admin@admin.com',
                'password' => bcrypt('Aa123456'),
                'role' => 'admin',
            ],
            [
                'name' => 'Normal_user',
                'email' => 'normal@admin.com',
                'password' => bcrypt('Aa123456'),
                'role' => 'normal_user',
            ],
            [
                'name' => 'Visitor',
                'email' => 'visitor@admin.com',
                'password' => bcrypt('Aa123456'),
                'role' => 'visitor',
            ],
        ];

        DB::table('users')->insert($users);
    }
}
