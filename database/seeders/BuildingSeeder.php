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
            'name' => 'Dimaporo Building',
            'no_of_floors' => '3',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('buildings')->insert([
            'id' => 2,
            'name' => 'Senin-Abagon Building',
            'no_of_floors' => '2',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('buildings')->insert([
            'id' => 3,
            'name' => 'Tomas Cabili Building',
            'no_of_floors' => '3',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('buildings')->insert([
            'id' => 4,
            'name' => 'SHS TVL 1 Lab Building',
            'no_of_floors' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('buildings')->insert([
            'id' => 5,
            'name' => 'Unde Building',
            'no_of_floors' => '2',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('buildings')->insert([
            'id' => 6,
            'name' => 'Mabini Building (Library)',
            'no_of_floors' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('buildings')->insert([
            'id' => 7,
            'name' => 'Aguinaldo Building',
            'no_of_floors' => '2',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('buildings')->insert([
            'id' => 8,
            'name' => 'ANNEX Building',
            'no_of_floors' => '2',
            'created_at' => now(),
            'updated_at' => now()
        ])
        ;DB::table('buildings')->insert([
            'id' => 9,
            'name' => 'Jose Rizal Building',
            'no_of_floors' => '3',
            'created_at' => now(),
            'updated_at' => now()
        ])
        ;DB::table('buildings')->insert([
            'id' => 10,
            'name' => 'MAPEH/CAT OFFICE',
            'no_of_floors' => '3',
            'created_at' => now(),
            'updated_at' => now()
        ])
        ;DB::table('buildings')->insert([
            'id' => 11,
            'name' => 'Andres Bonifacio Building',
            'no_of_floors' => '3',
            'created_at' => now(),
            'updated_at' => now()
        ])
        ;DB::table('buildings')->insert([
            'id' => 12,
            'name' => 'DOST-ESEP Building',
            'no_of_floors' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        ;DB::table('buildings')->insert([
            'id' => 13,
            'name' => 'Gregorio Del Pilar Building',
            'no_of_floors' => '3',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        ;DB::table('buildings')->insert([
            'id' => 14,
            'name' => 'SHS TVL 2 Lab Building',
            'no_of_floors' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        ;DB::table('buildings')->insert([
            'id' => 15,
            'name' => 'Ninoy Aquino Building',
            'no_of_floors' => '2',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        ;DB::table('buildings')->insert([
            'id' => 16,
            'name' => 'Gabriela Silang Building',
            'no_of_floors' => '2',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        ;DB::table('buildings')->insert([
            'id' => 17,
            'name' => 'GOMBURZA Building',
            'no_of_floors' => '2',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        ;DB::table('buildings')->insert([
            'id' => 18,
            'name' => 'Jose Abad Santos Buildling',
            'no_of_floors' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        ;DB::table('buildings')->insert([
            'id' => 19,
            'name' => 'A. Mabini Building / PAGCOR',
            'no_of_floors' => '4',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        ;DB::table('buildings')->insert([
            'id' => 20,
            'name' => 'Antionio Luna Building',
            'no_of_floors' => '3',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        ;DB::table('buildings')->insert([
            'id' => 21,
            'name' => 'Gymnasium',
            'no_of_floors' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        ;DB::table('buildings')->insert([
            'id' => 22,
            'name' => 'Manuel Quezon Building',
            'no_of_floors' => '3',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        ;DB::table('buildings')->insert([
            'id' => 23,
            'name' => 'ICNHS Clinic Building',
            'no_of_floors' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        ;DB::table('buildings')->insert([
            'id' => 24,
            'name' => 'Emilio Jacinto Building',
            'no_of_floors' => '2',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        ;DB::table('buildings')->insert([
            'id' => 25,
            'name' => 'Dagohoy Building',
            'no_of_floors' => '4',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        ;DB::table('buildings')->insert([
            'id' => 26,
            'name' => 'Oval Stage',
            'no_of_floors' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        ;DB::table('buildings')->insert([
            'id' => 27,
            'name' => 'Lapu-Lapu Building',
            'no_of_floors' => '4',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        ;DB::table('buildings')->insert([
            'id' => 28,
            'name' => 'Canteen',
            'no_of_floors' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        ;DB::table('buildings')->insert([
            'id' => 29,
            'name' => 'Araling Panlipunan Department Office',
            'no_of_floors' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        ;DB::table('buildings')->insert([
            'id' => 30,
            'name' => 'TLE Office',
            'no_of_floors' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
