<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([
            'id' => 1,
            'name' => 'Maria Theresa',
            'email' => 'mariatheresa.bolongan@gmail.com',
            'contact_no' => '09263807125',
            'user_id' => 1,
            'room_id' => 1,
            'department_id' => 6,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        
    }
}
