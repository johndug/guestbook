<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin John',
            'email' => 'admin@webmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('user_levels')->insert([
            'user_ref' => 1,
            'level_ref' =>1
        ]);

        DB::table('levels')->insert([
            'id' => 1,
            'name' => 'Admin'
        ]);
        
        DB::table('levels')->insert([
            'id' => 2,
            'name' => 'User'
        ]);
    }
}

class UserSeed extends Seeder
{
    
}