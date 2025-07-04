<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AccountSeeder::class, 
            UsersTableSeeder::class, 
            BuildingSeeder::class,
            ClassroomSeeder::class,
            DepartmentSeeder::class,
            TeacherSeeder::class,
            SubjectSeeder::class,
            Subject_Teacher_Seeder::class,
            StudentSeeder::class,
        ]);
    }
}
