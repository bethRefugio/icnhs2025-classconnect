<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert([ 'id' => 1, 'name' => 'Administrator', 'created_at' => now(), 'updated_at' => now() ]);
        DB::table('accounts')->insert([ 'id' => 2, 'name' => 'Staff', 'created_at' => now(), 'updated_at' => now() ]);
        DB::table('accounts')->insert([ 'id' => 3, 'name' => 'Parent', 'created_at' => now(), 'updated_at' => now() ]);
        DB::table('accounts')->insert([ 'id' => 4, 'name' => 'Teacher', 'created_at' => now(), 'updated_at' => now() ]);
    }
}
