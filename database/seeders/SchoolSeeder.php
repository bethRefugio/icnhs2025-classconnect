<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schools')->insert([
            'id' => 1,
            'name' => 'Iligan City National High School - Main',
            'abbrv' => 'ICNHS-Main',
            'level' => 'highSchool',
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('schools')->insert([
            'id' => 2,
            'name' => 'Tambacan Elementary School',
            'abbrv' => 'TES',
            'level' => 'elementary',
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('schools')->insert([
            'id' => 3,
            'name' => 'Iligan City National High School - Tambacan Annex',
            'abbrv' => 'ICNHS-Tambacan',
            'level' => 'highSchool',
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('schools')->insert([
            'id' => 4,
            'name' => 'Iligan City National High School - Palao Annex',
            'abbrv' => 'ICNHS-Palao',
            'level' => 'highSchool',
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
