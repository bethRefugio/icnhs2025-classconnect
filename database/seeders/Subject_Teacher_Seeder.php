<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Subject_Teacher_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subject_teacher')->insert([
            'id' => 1,
            'subject_id' => 1,
            'teacher_id' => 1,
            'building_id' => 1,
            'room_id' => 12,
            'vacant_time' => '7:30 am - 8:15 am, 11:00 am - 11:45 am',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        

        
    }
}
