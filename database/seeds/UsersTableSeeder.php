<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'Admin',
            'email' => 'admin@gmail.com',
            'role' =>'0',
            'email_verified_at' => null,
            'password' => Hash::make('123456'),],
            ['name' => 'Client',
            'email' => 'client@gmail.com',
            'role' =>'1',
            'email_verified_at' => null,
            'password' => Hash::make('123456'),],
            ['name' => 'Analyst',
            'email' => 'analyst@gmail.com',
            'role' =>'2',
            'email_verified_at' => null,
            'password' => Hash::make('123456'),],
            ['name' => 'Manager',
            'email' => 'manager@gmail.com',
            'role' =>'3',
            'email_verified_at' => null,
            'password' => Hash::make('123456'),],

        ]);
    }
}
