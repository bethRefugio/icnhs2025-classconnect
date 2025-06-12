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
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subject_teacher')->insert([
            'id' => 2,
            'subject_id' => 2,
            'teacher_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subject_teacher')->insert([
            'id' => 3,
            'subject_id' => 2,
            'teacher_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subject_teacher')->insert([
            'id' => 4,
            'subject_id' => 1,
            'teacher_id' => 4,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subject_teacher')->insert([
            'id' => 5,
            'subject_id' => 2,
            'teacher_id' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subject_teacher')->insert([
            'id' => 6,
            'subject_id' => 3,
            'teacher_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        

        
    }
}
