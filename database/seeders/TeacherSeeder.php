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
            'first_name' => 'Maria Theresa',
            'last_name' => 'Bolongan',
            'gender' => 'female',
            'email' => 'mariatheresa.bolongan@gmail.com',
            'mobile_no' => '09263807125',
            'telephone_no' => '222-4715',
            'grade' => '7',
            'section' => '1',
            'position' => 'Teacher III',
            'user_id' => 1,
            'school_id' => 1,
            'classroom_id' => 1,
            'building_id' => 1,
            'department_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('teachers')->insert([
            'first_name' => 'Janet',
            'last_name' => 'Labisig',
            'gender' => 'female',
            'email' => 'janetsy.Labisig@yahoo.com',
            'mobile_no' => '1234567890',
            'telephone_no' => '12345',
            'grade' => '8',
            'section' => '1',
            'position' => 'Teacher III',
            'user_id' => 1,
            'school_id' => 1,
            'classroom_id' => 2,
            'building_id' => 1,
            'department_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('teachers')->insert([
            'first_name' => 'Flordeliza',
            'last_name' => 'Villamor',
            'gender' => 'female',
            'email' => 'flordeliza.Villamor@gmail.com',
            'mobile_no' => '1234567890',
            'telephone_no' => '12345',
            'grade' => '8',
            'section' => '2',
            'position' => 'Teacher I',
            'user_id' => 1,
            'school_id' => 1,
            'classroom_id' => 4,
            'building_id' => 2,
            'department_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('teachers')->insert([
            'first_name' => 'Rommel',
            'last_name' => 'Lim',
            'gender' => 'male',
            'email' => 'rommel.lim@gmail.com',
            'mobile_no' => '1234567890',
            'telephone_no' => '12345',
            'grade' => '8',
            'section' => '3',
            'position' => 'Teacher III',
            'user_id' => 1,
            'school_id' => 1,
            'classroom_id' => 3,
            'building_id' => 2,
            'department_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('teachers')->insert([
            'first_name' => 'Anarose',
            'last_name' => 'Dalura',
            'gender' => 'female',
            'email' => 'anarose.dalura@gmail.com',
            'mobile_no' => '1234567890',
            'telephone_no' => '12345',
            'grade' => '2',
            'section' => '4',
            'position' => 'Teacher III',
            'user_id' => 1,
            'school_id' => 2,
            'classroom_id' => 5,
            'building_id' => 7,
            'department_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('teachers')->insert([
            'first_name' => 'Theresa',
            'last_name' => 'Tampus',
            'gender' => 'female',
            'email' => 'theresa.tampus@gmail.com',
            'mobile_no' => '1234567890',
            'telephone_no' => '12345',
            'grade' => '2',
            'section' => '1',
            'position' => 'Teacher I',
            'user_id' => 1,
            'school_id' => 2,
            'classroom_id' => 6,
            'building_id' => 7,
            'department_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('teachers')->insert([
            'first_name' => 'Emma',
            'last_name' => 'Iniego',
            'gender' => 'female',
            'email' => 'emma.iniego@gmail.com',
            'mobile_no' => '1234567890',
            'telephone_no' => '12345',
            'grade' => '1',
            'section' => '1',
            'position' => 'Teacher I',
            'user_id' => 1,
            'school_id' => 2,
            'classroom_id' => 8,
            'building_id' => 8,
            'department_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('teachers')->insert([
            'first_name' => 'Abigail',
            'last_name' => 'Inocian',
            'gender' => 'female',
            'email' => 'abigail.inocian@gmail.com',
            'mobile_no' => '1234567890',
            'telephone_no' => '12345',
            'grade' => '1',
            'section' => '3',
            'position' => 'Teacher I',
            'user_id' => 1,
            'school_id' => 2,
            'classroom_id' => 9,
            'building_id' => 8,
            'department_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
