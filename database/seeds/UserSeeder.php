<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Super Admin',
            'role_id' => 3, // Super Admin
            'email' => env('USER_EMAIL'),
            'password' => Hash::make(env('USER_PASSWORD'))
        ]);
    }
}