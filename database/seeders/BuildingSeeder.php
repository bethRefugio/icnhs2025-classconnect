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
            'no_of_floors' => '3',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('buildings')->insert([
            'id' => 2,
            'name' => 'Rizal Building',
            'no_of_floors' => '3',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('buildings')->insert([
            'id' => 3,
            'name' => 'Del Pilar Building',
            'no_of_floors' => '3',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('buildings')->insert([
            'id' => 4,
            'name' => 'Mabini Building',
            'no_of_floors' => '3',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('buildings')->insert([
            'id' => 5,
            'name' => 'Jacinto Building',
            'no_of_floors' => '3',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('buildings')->insert([
            'id' => 6,
            'name' => 'Aguinaldo Building',
            'no_of_floors' => '3',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('buildings')->insert([
            'id' => 7,
            'name' => 'Dimaporo Building',
            'no_of_floors' => '3',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('buildings')->insert([
            'id' => 8,
            'name' => 'Luna Building',
            'no_of_floors' => '3',
            'created_at' => now(),
            'updated_at' => now()
        ])
        ;DB::table('buildings')->insert([
            'id' => 9,
            'name' => 'VARF Building',
            'no_of_floors' => '3',
            'created_at' => now(),
            'updated_at' => now()
        ])
        ;DB::table('buildings')->insert([
            'id' => 10,
            'name' => 'Senin-Agabon Building',
            'no_of_floors' => '3',
            'created_at' => now(),
            'updated_at' => now()
        ])
        ;DB::table('buildings')->insert([
            'id' => 11,
            'name' => 'Tomas Cabili Building',
            'no_of_floors' => '3',
            'created_at' => now(),
            'updated_at' => now()
        ])
        ;DB::table('buildings')->insert([
            'id' => 12,
            'name' => 'Lapu-Lapu Building',
            'no_of_floors' => '3',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        ;DB::table('buildings')->insert([
            'id' => 13,
            'name' => 'ESEP Building',
            'no_of_floors' => '3',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        ;DB::table('buildings')->insert([
            'id' => 14,
            'name' => 'Jose Abad Santos Building',
            'no_of_floors' => '3',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        ;DB::table('buildings')->insert([
            'id' => 15,
            'name' => 'Gabriela Silang Building',
            'no_of_floors' => '3',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        ;DB::table('buildings')->insert([
            'id' => 16,
            'name' => 'GOMBURZA Building',
            'no_of_floors' => '3',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        ;DB::table('buildings')->insert([
            'id' => 17,
            'name' => 'Canteen',
            'no_of_floors' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
