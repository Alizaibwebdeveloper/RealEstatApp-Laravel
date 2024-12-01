<?php

namespace Database\Seeders;

use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    DB::table('users')->insert([
     // Admin


        [
            'name'=> 'Admin',
            'username'=> 'admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('123456789'),
            'role'=>'admin',
            'status'=> 'active'
        ],

        // Agent
        
        [
            'name'=> 'Agent',
            'username'=> 'agent',
            'email'=>'agent@gmail.com',
            'password'=>Hash::make('123456789'),
            'role'=>'agent',
            'status'=> 'active'
        ],
          
        // User
        
        [
            'name'=> 'User',
            'username'=> 'user',
            'email'=>'user@gmail.com',
            'password'=>Hash::make('123456789'),
            'role'=>'user',
            'status'=> 'active'
        ],
    ]);

    }
}
