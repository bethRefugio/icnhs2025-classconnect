<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'id' => 1,
            'user_id' => 120,
            'name' => 'Student User',
            'email' => 'student.user@gmail.com',
            'contact_no' => '09672998543',
            'LRN' => '124587654782',
            'year_level' => 'Grade 7',            
            'adviser_id' => 1,
            'room_id'=> 12,
            'parent' => 'Parent Sample',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}