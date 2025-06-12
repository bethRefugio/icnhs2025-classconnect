<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassroomSeeder extends Seeder
{
    public function run()
    {
        // Get all buildings from the database
        $buildings = DB::table('buildings')->get();

        $rooms_per_building = 15;
        $floors = [
            1 => [1,2,3,4,5],
            2 => [6,7,8,9,10],
            3 => [11,12,13,14,15],
        ];

        // Start classroom IDs at 1 (or get the max from DB if you want to append)
        $classroomId = 1;

        foreach ($buildings as $building) {
            for ($room = 1; $room <= $rooms_per_building; $room++) {
                // Determine floor number based on room number
                $floor_no = 1;
                foreach ($floors as $floor => $room_numbers) {
                    if (in_array($room, $room_numbers)) {
                        $floor_no = $floor;
                        break;
                    }
                }
                DB::table('classrooms')->insert([
                    'id' => $classroomId,
                    'room_no' => 'Room ' . $room,
                    'name' => '',
                    'floor_no' => $floor_no,
                    'building_id' => $building->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
                $classroomId++;
            }
        }
    }
}