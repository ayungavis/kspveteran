<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'User',
            'code' => 'user',
            'level' => 1
        ]);

        DB::table('roles')->insert([
            'name' => 'Kepala Cabang',
            'code' => 'head-office',
            'level' => 2
        ]);

        DB::table('roles')->insert([
            'name' => 'Super Admin',
            'code' => 'super-admin',
            'level' => 10
        ]);
    }
}
