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
            'name' => 'Aquino Building',
            'no_of_floors' => '2',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('buildings')->insert([
            'id' => 2,
            'name' => 'Rizal Building',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('buildings')->insert([
            'id' => 3,
            'name' => 'Del Pilar Building',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('buildings')->insert([
            'id' => 4,
            'name' => 'Mabini Building',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('buildings')->insert([
            'id' => 5,
            'name' => 'Jacinto Building',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('buildings')->insert([
            'id' => 6,
            'name' => 'Jas Building',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('buildings')->insert([
            'id' => 7,
            'name' => 'Aguinaldo Building',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('buildings')->insert([
            'id' => 8,
            'name' => 'TCB Building',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('buildings')->insert([
            'id' => 9,
            'name' => 'Dimaporo Building',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('buildings')->insert([
            'id' => 10,
            'name' => 'Luna Building',
            'created_at' => now(),
            'updated_at' => now()
        ])
        ;DB::table('buildings')->insert([
            'id' => 11,
            'name' => 'VARF Building',
            'created_at' => now(),
            'updated_at' => now()
        ])
        ;DB::table('buildings')->insert([
            'id' => 12,
            'name' => 'Senin-Agabon Building',
            'created_at' => now(),
            'updated_at' => now()
        ])
        ;DB::table('buildings')->insert([
            'id' => 13,
            'name' => 'Tomas Cabili Building',
            'created_at' => now(),
            'updated_at' => now()
        ])
        ;DB::table('buildings')->insert([
            'id' => 14,
            'name' => 'Lapu-Lapu Building',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        ;DB::table('buildings')->insert([
            'id' => 15,
            'name' => 'ESEP Building',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        ;DB::table('buildings')->insert([
            'id' => 16,
            'name' => 'Jose Abad Santos Building',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        ;DB::table('buildings')->insert([
            'id' => 17,
            'name' => 'Canteen',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        ;DB::table('buildings')->insert([
            'id' => 18,
            'name' => 'Gabriela Silang Building',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        ;DB::table('buildings')->insert([
            'id' => 19,
            'name' => 'GOMBURZA Building',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
