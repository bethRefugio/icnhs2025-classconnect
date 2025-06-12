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
            'name' => 'Maria Corazon Alegria Abitago',
            'email' => 'mariacorazonalegria.abitago@deped.gov.ph',
            'contact_no' => '09672295909',
            'vacant_time' => '7:30 am - 8:15 am ; 11:00 am - 11:45 am',
            'user_id' => 7,
            'room_id'=> 12,
            'department_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('teachers')->insert([
            'id' => 2,
            'name' => 'Janet Agustino',
            'email' => 'janet.agustino@deped.gov.ph',
            'contact_no' => '09061945595',
            'vacant_time' => '7:30 am - 8:15 am ; 8:15 am - 9:00 am',
            'user_id' => 8,
            'room_id'=> 19,
            'department_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('teachers')->insert([
            'id' => 3,
            'name' => 'Mary Ann Angot',
            'email' => 'maryann.angot@deped.gov.ph',
            'contact_no' => '09606410076',
            'vacant_time' => '11:00 am - 11:45 am ; 2:15 pm - 3:00 pm',
            'user_id' => 9,
            'room_id'=> 25,
            'department_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('teachers')->insert([
            'id' => 4,
            'name' => 'Cherryl Cinco',
            'email' => 'cherryl.cinco001@deped.gov.ph',
            'contact_no' => '09157504369',
            'vacant_time' => '9:30 am - 10:15 am ; 1:30 pm - 2:15 pm',
            'user_id' => 10,
            'room_id'=> 38,
            'department_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('teachers')->insert([
            'id' => 5,
            'name' => 'Jazz Faye Falguera',
            'email' => 'jazzyfaye.falguera@deped.gov.ph',
            'contact_no' => '09162923285',
            'vacant_time' => '9:30 am - 10:15 am ; 11:00 am - 11:45 am',
            'user_id' => 12,
            'room_id'=> 57,
            'department_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

             
    }
}
