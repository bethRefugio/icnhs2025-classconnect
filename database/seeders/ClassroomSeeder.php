<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassroomSeeder extends Seeder
{
    public function run()
    {
        
        DB::table('classrooms')->insert([
            'id' => 1,
            'room_no' => '',
            'name' => 'Musuem and Memorabilia IA',
            'floor_no' => 1,
            'building_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('classrooms')->insert([
            'id' => 2,
            'room_no' => '',
            'name' => 'Special Education Resource Room',
            'floor_no' => 1,
            'building_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
         DB::table('classrooms')->insert([
            'id' => 3,
            'room_no' => 'Room 1',
            'name' => 'SPED Transition Class Academic Package Section - Hope ',
            'floor_no' => 1,
            'building_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        
                
    }
}