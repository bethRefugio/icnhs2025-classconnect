<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([
            'id' => 1,
            'name' => 'Myrna Acuba',
            'email' => 'mariacorazonalegria.abitago@deped.gov.ph',
            'contact_no' => '09672295909',
            'account_id' => 4,
            'department_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('teachers')->insert([
            'id' => 1,
            'name' => 'Myrna Acuba',
            'email' => 'mariacorazonalegria.abitago@deped.gov.ph',
            'contact_no' => '09672295909',
            'account_id' => 4,
            'department_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        
    }
}
