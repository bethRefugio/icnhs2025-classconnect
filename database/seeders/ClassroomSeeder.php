<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classrooms')->insert([
            'id' => 1,
            'name' => 'Cleanliness',
            'building_id' => 1,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('classrooms')->insert([
            'id' => 2,
            'name' => 'Love',
            'building_id' => 1,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('classrooms')->insert([
            'id' => 3,
            'name' => 'Gumamela',
            'building_id' => 2,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('classrooms')->insert([
            'id' => 4,
            'name' => 'Orchids',
            'building_id' => 2,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('classrooms')->insert([
            'id' => 5,
            'name' => 'Newton',
            'building_id' => 7,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('classrooms')->insert([
            'id' => 6,
            'name' => 'Maxwell',
            'building_id' => 7,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('classrooms')->insert([
            'id' => 7,
            'name' => 'Einstein',
            'building_id' => 7,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('classrooms')->insert([
            'id' => 8,
            'name' => 'Apple',
            'building_id' => 8,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('classrooms')->insert([
            'id' => 9,
            'name' => 'Banana',
            'building_id' => 8,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('classrooms')->insert([
            'id' => 10,
            'name' => 'Orange',
            'building_id' => 8,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('classrooms')->insert([
            'id' => 11,
            'name' => 'Bonifacio',
            'building_id' => 9,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('classrooms')->insert([
            'id' => 12,
            'name' => 'Rizal',
            'building_id' => 9,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('classrooms')->insert([
            'id' => 13,
            'name' => 'Mabini',
            'building_id' => 9,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
