<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            'id' => 1,
            'abbrv' => 'FIL',
            'name' => 'Filipino',
            'head' => 'Edarline E. Quiapo',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('departments')->insert([
            'id' => 2,
            'abbrv' => 'Math',
            'name' => 'Mathematics',
            'head' => 'Annabelle E. De Guzman',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('departments')->insert([
            'id' => 3,
            'abbrv' => 'Science',
            'name' => 'Science',
            'head' => 'Jeremy P. Sacon',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('departments')->insert([
            'id' => 4,
            'abbrv' => 'English',
            'name' => 'English',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('departments')->insert([
            'id' => 5,
            'abbrv' => 'MAPEH',
            'name' => 'Music, Arts, Physical Education, and Health',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('departments')->insert([
            'id' => 6,
            'abbrv' => 'TLE',
            'name' => 'Technology and Livelihood Education',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('departments')->insert([
            'id' => 7,
            'abbrv' => 'SNED',
            'name' => 'Special Needs Education',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('departments')->insert([
            'id' => 8,
            'abbrv' => 'ALS',
            'name' => 'Alternative Learning System',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('departments')->insert([
            'id' => 9,
            'abbrv' => 'AP',
            'name' => 'Araling Panlipunan',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('departments')->insert([
            'id' => 10,
            'abbrv' => 'ESP',
            'name' => 'Edukasyon sa Pagpapakatao',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
