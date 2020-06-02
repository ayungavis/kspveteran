<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApplicationStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('application_statuses')->insert([
            'name' => 'Sedang Diajukan',
            'slug' => 'waiting-confirmation'
        ]);

        DB::table('application_statuses')->insert([
            'name' => 'Disetujui',
            'slug' => 'approved'
        ]);

        DB::table('application_statuses')->insert([
            'name' => 'Ditolak',
            'slug' => 'rejected'
        ]);
    }
}
