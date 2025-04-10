<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BuildingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buildings')->insert([
            'id' => 1,
            'name' => 'Del Pilar',
            'school_id' => 1,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('buildings')->insert([
            'id' => 2,
            'name' => 'Jacinto',
            'school_id' => 1,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('buildings')->insert([
            'id' => 3,
            'name' => 'Rizal',
            'school_id' => 1,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('buildings')->insert([
            'id' => 4,
            'name' => 'Pagcor',
            'school_id' => 1,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('buildings')->insert([
            'id' => 5,
            'name' => 'Gabriela Silang',
            'school_id' => 1,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('buildings')->insert([
            'id' => 6,
            'name' => 'Dagohoy',
            'school_id' => 1,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('buildings')->insert([
            'id' => 7,
            'name' => 'Saturn',
            'school_id' => 2,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('buildings')->insert([
            'id' => 8,
            'name' => 'Earth',
            'school_id' => 2,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('buildings')->insert([
            'id' => 9,
            'name' => 'Mars',
            'school_id' => 2,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
