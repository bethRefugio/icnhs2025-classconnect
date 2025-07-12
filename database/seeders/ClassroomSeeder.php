<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassroomSeeder extends Seeder
{
    public function run()
    {
        
        DB::table('classrooms')->insert([
            'id' => 1,
            'room_no' => '',
            'name' => 'Musuem and Memorabilia IA',
            'floor_no' => 1,
            'building_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('classrooms')->insert([
            'id' => 2,
            'room_no' => '',
            'name' => 'Special Education Resource Room',
            'floor_no' => 1,
            'building_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
         DB::table('classrooms')->insert([
            'id' => 3,
            'room_no' => 'Room 1',
            'name' => 'SPED Transition Class Academic Package Section - Hope ',
            'floor_no' => 1,
            'building_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('classrooms')->insert([
            'id' => 4,
            'room_no' => 'Room 2',
            'name' => 'Grade 10 - Einstein ',
            'floor_no' => 1,
            'building_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('classrooms')->insert([
            'id' => 5,
            'room_no' => 'Room 3',
            'name' => 'Special Program for Arts (SPA) ',
            'floor_no' => 2,
            'building_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
         DB::table('classrooms')->insert([
            'id' => 6,
            'room_no' => 'Room 4',
            'name' => 'Acacia ',
            'floor_no' => 2,
            'building_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
          DB::table('classrooms')->insert([
            'id' => 7,
            'room_no' => 'Room 5',
            'name' => 'Cypress ',
            'floor_no' => 2,
            'building_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('classrooms')->insert([
            'id' => 8,
            'room_no' => '',
            'name' => 'ALS',
            'floor_no' => 3,
            'building_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('classrooms')->insert([
            'id' => 9,
            'room_no' => 'Room 6',
            'name' => 'Oak',
            'floor_no' => 3,
            'building_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
          DB::table('classrooms')->insert([
            'id' => 10,
            'room_no' => 'Room 7',
            'name' => 'Special Program for Journalists (SPJ)',
            'floor_no' => 3,
            'building_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
          DB::table('classrooms')->insert([
            'id' => 11,
            'room_no' => 'Room 8',
            'name' => 'Yakal',
            'floor_no' => 3,
            'building_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);  
           DB::table('classrooms')->insert([
            'id' => 12,
            'room_no' => '',
            'name' => 'Yakal',
            'floor_no' => 3,
            'building_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);  
        DB::table('classrooms')->insert([
            'id' => 13,
            'room_no' => '',
            'name' => 'Comfort Rooms',
            'floor_no' => 1,
            'building_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);     
        DB::table('classrooms')->insert([
            'id' => 14,
            'room_no' => '',
            'name' => 'Science 9&10 Office',
            'floor_no' => 1,
            'building_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);  
         DB::table('classrooms')->insert([
            'id' => 15,
            'room_no' => '',
            'name' => 'SHS Guidance Office',
            'floor_no' => 1,
            'building_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);    
        DB::table('classrooms')->insert([
            'id' => 16,
            'room_no' => '',
            'name' => 'Programe for International Student Assessment Center',
            'floor_no' => 1,
            'building_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);  
          DB::table('classrooms')->insert([
            'id' => 17,
            'room_no' => '',
            'name' => 'Principals Office',
            'floor_no' => 2,
            'building_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);  
         DB::table('classrooms')->insert([
            'id' => 18,
            'room_no' => '',
            'name' => 'Fiscal Section',
            'floor_no' => 2,
            'building_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);     
        DB::table('classrooms')->insert([
            'id' => 19,
            'room_no' => '',
            'name' => 'Cashier',
            'floor_no' => 2,
            'building_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);  
        DB::table('classrooms')->insert([
            'id' => 20,
            'room_no' => '',
            'name' => 'Records Section',
            'floor_no' => 2,
            'building_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);    
        DB::table('classrooms')->insert([
            'id' => 21,
            'room_no' => '',
            'name' => "Registrar's Office",
            'floor_no' => 2,
            'building_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);   
         DB::table('classrooms')->insert([
            'id' => 22,
            'room_no' => '',
            'name' => 'Office of the Auditor',
            'floor_no' => 2,
            'building_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);    
         DB::table('classrooms')->insert([
            'id' => 23,
            'room_no' => '',
            'name' => 'Property and Supply Office',
            'floor_no' => 2,
            'building_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);     
          DB::table('classrooms')->insert([
            'id' => 24,
            'room_no' => '1',
            'name' => 'Narra',
            'floor_no' => 1,
            'building_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);   
          DB::table('classrooms')->insert([
            'id' => 25,
            'room_no' => '2',
            'name' => 'Mahogany',
            'floor_no' => 1,
            'building_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);  
          DB::table('classrooms')->insert([
            'id' => 26,
            'room_no' => '3',
            'name' => 'Molave',
            'floor_no' => 1,
            'building_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);   
         DB::table('classrooms')->insert([
            'id' => 27,
            'room_no' => '',
            'name' => 'Center Hallway',
            'floor_no' => 1,
            'building_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);   
         DB::table('classrooms')->insert([
            'id' => 28,
            'room_no' => '',
            'name' => 'Supreme Student Government/Student Peer Facilitator Office',
            'floor_no' => 1,
            'building_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]); 
         DB::table('classrooms')->insert([
            'id' => 29,
            'room_no' => '',
            'name' => 'Science Department (Grade9&10)',
            'floor_no' => 1,
            'building_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);  
         DB::table('classrooms')->insert([
            'id' => 30,
            'room_no' => '',
            'name' => 'Araling Panlipunan (Grade9&10)',
            'floor_no' => 1,
            'building_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);  
        DB::table('classrooms')->insert([
            'id' => 31,
            'room_no' => '',
            'name' => 'Office of the Guidance Councilor - JHS',
            'floor_no' => 1,
            'building_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);   
           DB::table('classrooms')->insert([
            'id' => 32,
            'room_no' => '4',
            'name' => 'Kamagong',
            'floor_no' => 1,
            'building_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);     
             DB::table('classrooms')->insert([
            'id' => 33,
            'room_no' => '5',
            'name' => 'Apitong',
            'floor_no' => 1,
            'building_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]); 
           DB::table('classrooms')->insert([
            'id' => 34,
            'room_no' => '',
            'name' => "Women's CR",
            'floor_no' => 1,
            'building_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);  
          DB::table('classrooms')->insert([
            'id' => 35,
            'room_no' => '6',
            'name' => 'Dao',
            'floor_no' => 1,
            'building_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);    
        DB::table('classrooms')->insert([
            'id' => 36,
            'room_no' => '7',
            'name' => 'Lawaan',
            'floor_no' => 1,
            'building_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);   
        DB::table('classrooms')->insert([
            'id' => 37,
            'room_no' => '8',
            'name' => 'Almaciga',
            'floor_no' => 1,
            'building_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);     
        DB::table('classrooms')->insert([
            'id' => 38,
            'room_no' => '',
            'name' => "Men's CR",
            'floor_no' => 1,
            'building_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);   
         DB::table('classrooms')->insert([
            'id' => 39,
            'room_no' => '9',
            'name' => 'Jose Rizal',
            'floor_no' => 2,
            'building_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);   
         DB::table('classrooms')->insert([
            'id' => 40,
            'room_no' => '10',
            'name' => 'Apolinario Mabini',
            'floor_no' => 2,
            'building_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);  
         DB::table('classrooms')->insert([
            'id' => 41,
            'room_no' => '11',
            'name' => 'Emilio Jacinto',
            'floor_no' => 2,
            'building_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]); 
        DB::table('classrooms')->insert([
            'id' => 42,
            'room_no' => '',
            'name' => 'Nick Joaquin',
            'floor_no' => 2,
            'building_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);  
        DB::table('classrooms')->insert([
            'id' => 43,
            'room_no' => '12',
            'name' => 'Gregorio Del Pilar',
            'floor_no' => 3,
            'building_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);  
         DB::table('classrooms')->insert([
            'id' => 44,
            'room_no' => '13',
            'name' => 'Juan Luna',
            'floor_no' => 1,
            'building_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);   
         DB::table('classrooms')->insert([
            'id' => 45,
            'room_no' => '14',
            'name' => 'Lapu-Lapu',
            'floor_no' => 1,
            'building_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);   
         DB::table('classrooms')->insert([
            'id' => 46,
            'room_no' => '',
            'name' => "Women's CR",
            'floor_no' => 1,
            'building_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);   
        DB::table('classrooms')->insert([
            'id' => 47,
            'room_no' => '15',
            'name' => 'Quirino',
            'floor_no' => 1,
            'building_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);   
          DB::table('classrooms')->insert([
            'id' => 48,
            'room_no' => '16',
            'name' => 'Pedro Paterno',
            'floor_no' => 1,
            'building_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);   
          DB::table('classrooms')->insert([
            'id' => 49,
            'room_no' => '17',
            'name' => 'Sergio Osmeña',
            'floor_no' => 2,
            'building_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
         DB::table('classrooms')->insert([
            'id' => 50,
            'room_no' => '',
            'name' => 'Abandoned CR',
            'floor_no' => 2,
            'building_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
          DB::table('classrooms')->insert([
            'id' => 51,
            'room_no' => '18',
            'name' => 'Tandang Sora',
            'floor_no' => 2,
            'building_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]); 
        DB::table('classrooms')->insert([
			'id' => 52,
			'room_no' => '19',
			'name' => 'Aquino',
			'floor_no' => 3,
			'building_id' => 3,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 53,
			'room_no' => '20',
			'name' => 'GOMBURZA',
			'floor_no' => 3,
			'building_id' => 3,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 54,
			'room_no' => '21',
			'name' => 'Diego Silang',
			'floor_no' => 3,
			'building_id' => 3,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 55,
			'room_no' => '22',
			'name' => 'Tomas Pinpin',
			'floor_no' => 3,
			'building_id' => 3,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 56,
			'room_no' => '23',
			'name' => 'Andres Bonifacio',
			'floor_no' => 3,
			'building_id' => 3,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 57,
			'room_no' => '24',
			'name' => 'Gerry Roxas',
			'floor_no' => 3,
			'building_id' => 3,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 58,
			'room_no' => '25',
			'name' => 'Francisco Baltazar',
			'floor_no' => 3,
			'building_id' => 3,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 59,
			'room_no' => '',
			'name' => 'Comfort Room/Lounge Area',
			'floor_no' => 3,
			'building_id' => 3,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 60,
			'room_no' => '26',
			'name' => 'Francisco Dagohoy',
			'floor_no' => 3,
			'building_id' => 3,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 61,
			'room_no' => '27',
			'name' => 'Arellano',
			'floor_no' => 3,
			'building_id' => 3,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 62,
			'room_no' => '28',
			'name' => 'Manuel L. Quezon',
			'floor_no' => 3,
			'building_id' => 3,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 63,
			'room_no' => '',
			'name' => 'Abandoned CR',
			'floor_no' => 3,
			'building_id' => 3,
			'created_at' => now(),
			'updated_at' => now(),
		]);   
        DB::table('classrooms')->insert([
			'id' => 64,
			'room_no' => '',
			'name' => 'BPP Canteen',
			'floor_no' => 1,
			'building_id' => 4,
			'created_at' => now(),
			'updated_at' => now(),
		]);   
        DB::table('classrooms')->insert([
			'id' => 65,
			'room_no' => '',
			'name' => 'BPP Laboratory',
			'floor_no' => 1,
			'building_id' => 4,
			'created_at' => now(),
			'updated_at' => now(),
		]);   
         DB::table('classrooms')->insert([
			'id' => 66,
			'room_no' => '1',
			'name' => 'Grade 12 Quartz',
			'floor_no' => 1,
			'building_id' => 5,
			'created_at' => now(),
			'updated_at' => now(),
		]);   
        DB::table('classrooms')->insert([
			'id' => 67,
			'room_no' => '2',
			'name' => '',
			'floor_no' => 1,
			'building_id' => 5,
			'created_at' => now(),
			'updated_at' => now(),
		]);   
         DB::table('classrooms')->insert([
			'id' => 68,
			'room_no' => '1',
			'name' => 'School Library',
			'floor_no' => 1,
			'building_id' => 6,
			'created_at' => now(),
			'updated_at' => now(),
		]); 
         DB::table('classrooms')->insert([
			'id' => 69,
			'room_no' => '1',
			'name' => 'Special Education Transition Class (Multi-Grade)',
			'floor_no' => 1,
			'building_id' => 7,
			'created_at' => now(),
			'updated_at' => now(),
		]);   
        DB::table('classrooms')->insert([
			'id' => 70,
			'room_no' => '2',
			'name' => 'Coconut',
			'floor_no' => 1,
			'building_id' => 7,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 71,
			'room_no' => '3',
			'name' => 'Jackfruit',
			'floor_no' => 1,
			'building_id' => 7,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 72,
			'room_no' => '4',
			'name' => 'Camachile',
			'floor_no' => 1,
			'building_id' => 7,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 73,
			'room_no' => '5',
			'name' => 'Eucalyptus',
			'floor_no' => 1,
			'building_id' => 7,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 74,
			'room_no' => '',
			'name' => 'Values Education Department',
			'floor_no' => 2,
			'building_id' => 7,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 75,
			'room_no' => '',
			'name' => 'Rosewood',
			'floor_no' => 2,
			'building_id' => 7,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 76,
			'room_no' => '6',
			'name' => 'Opening High School Program',
			'floor_no' => 2,
			'building_id' => 7,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 77,
			'room_no' => '7',
			'name' => 'Jose Palma',
			'floor_no' => 2,
			'building_id' => 7,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 78,
			'room_no' => '8',
			'name' => 'Emilio Aguinaldo',
			'floor_no' => 2,
			'building_id' => 7,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 79,
			'room_no' => '9',
			'name' => 'Miguel Malvar',
			'floor_no' => 2,
			'building_id' => 7,
			'created_at' => now(),
			'updated_at' => now(),
		]);
        DB::table('classrooms')->insert([
			'id' => 80,
			'room_no' => '',
			'name' => 'Filipino Department (Grade 9&10)',
			'floor_no' => 1,
			'building_id' => 8,
			'created_at' => now(),
			'updated_at' => now(),
		]);
        DB::table('classrooms')->insert([
			'id' => 81,
			'room_no' => '',
			'name' => 'Math Department (Grade 9&10)',
			'floor_no' => 2,
			'building_id' => 8,
			'created_at' => now(),
			'updated_at' => now(),
		]);
        DB::table('classrooms')->insert([
			'id' => 82,
			'room_no' => '1',
			'name' => 'Tulip',
			'floor_no' => 1,
			'building_id' => 9,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 83,
			'room_no' => '2',
			'name' => 'Carnation',
			'floor_no' => 1,
			'building_id' => 9,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 84,
			'room_no' => '3',
			'name' => 'Magnolia',
			'floor_no' => 1,
			'building_id' => 9,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 85,
			'room_no' => '4',
			'name' => 'Iris',
			'floor_no' => 1,
			'building_id' => 9,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 86,
			'room_no' => '5',
			'name' => '',
			'floor_no' => 2,
			'building_id' => 9,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 87,
			'room_no' => '6',
			'name' => 'Santan',
			'floor_no' => 2,
			'building_id' => 9,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 88,
			'room_no' => '7',
			'name' => 'Dahlia',
			'floor_no' => 2,
			'building_id' => 9,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 89,
			'room_no' => '8',
			'name' => 'Sunflower',
			'floor_no' => 2,
			'building_id' => 9,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 90,
			'room_no' => '9',
			'name' => 'Chrysanthemum',
			'floor_no' => 3,
			'building_id' => 9,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 91,
			'room_no' => '10',
			'name' => 'Graciano Lopez Jaena (SPJ)',
			'floor_no' => 3,
			'building_id' => 9,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 92,
			'room_no' => '11',
			'name' => 'Dandelion',
			'floor_no' => 3,
			'building_id' => 9,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 93,
			'room_no' => '12',
			'name' => 'Begonia',
			'floor_no' => 3,
			'building_id' => 9,
			'created_at' => now(),
			'updated_at' => now(),
		]);
        DB::table('classrooms')->insert([
			'id' => 94,
			'room_no' => '',
			'name' => 'MAPEH Office',
			'floor_no' => 1,
			'building_id' => 10,
			'created_at' => now(),
			'updated_at' => now(),
		]);
        DB::table('classrooms')->insert([
			'id' => 95,
			'room_no' => '',
			'name' => 'CAT Office',
			'floor_no' => 2,
			'building_id' => 10,
			'created_at' => now(),
			'updated_at' => now(),
		]);
        DB::table('classrooms')->insert([
			'id' => 96,
			'room_no' => '',
			'name' => 'MAPEH Department',
			'floor_no' => 3,
			'building_id' => 10,
			'created_at' => now(),
			'updated_at' => now(),
		]);
        		DB::table('classrooms')->insert([
			'id' => 97,
			'room_no' => '1',
			'name' => 'Kalisag',
			'floor_no' => 1,
			'building_id' => 11,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 98,
			'room_no' => '2',
			'name' => 'Comaneci',
			'floor_no' => 1,
			'building_id' => 11,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 99,
			'room_no' => '3',
			'name' => 'Manny Pacquiao',
			'floor_no' => 1,
			'building_id' => 11,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 100,
			'room_no' => '4',
			'name' => 'Olympia',
			'floor_no' => 2,
			'building_id' => 11,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 101,
			'room_no' => '5',
			'name' => 'Yldefonso',
			'floor_no' => 2,
			'building_id' => 11,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 102,
			'room_no' => '6',
			'name' => 'Carl Lewis',
			'floor_no' => 2,
			'building_id' => 11,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 103,
			'room_no' => '7',
			'name' => 'Edleon',
			'floor_no' => 3,
			'building_id' => 11,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 104,
			'room_no' => '8',
			'name' => 'Lino Brocka',
			'floor_no' => 3,
			'building_id' => 11,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 105,
			'room_no' => '9',
			'name' => '',
			'floor_no' => 3,
			'building_id' => 11,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 106,
			'room_no' => '10',
			'name' => 'SPA Symphonic Band',
			'floor_no' => 3,
			'building_id' => 11,
			'created_at' => now(),
			'updated_at' => now(),
		]);
        DB::table('classrooms')->insert([
			'id' => 107,
			'room_no' => '',
			'name' => 'DOST-ESEP Building',
			'floor_no' => 1,
			'building_id' => 12,
			'created_at' => now(),
			'updated_at' => now(),
		]);
        DB::table('classrooms')->insert([
			'id' => 108,
			'room_no' => '1',
			'name' => 'Perseverance',
			'floor_no' => 1,
			'building_id' => 13,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 109,
			'room_no' => '2',
			'name' => 'Industrious',
			'floor_no' => 1,
			'building_id' => 13,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 110,
			'room_no' => '3',
			'name' => 'Temperance',
			'floor_no' => 1,
			'building_id' => 13,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 111,
			'room_no' => '4',
			'name' => 'Trust',
			'floor_no' => 1,
			'building_id' => 13,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 112,
			'room_no' => '5',
			'name' => 'Patriotism',
			'floor_no' => 1,
			'building_id' => 13,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 113,
			'room_no' => '6',
			'name' => 'Cheerfulness',
			'floor_no' => 1,
			'building_id' => 13,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 114,
			'room_no' => '7',
			'name' => '',
			'floor_no' => 2,
			'building_id' => 13,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 115,
			'room_no' => '8',
			'name' => 'Frugality',
			'floor_no' => 2,
			'building_id' => 13,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 116,
			'room_no' => '9',
			'name' => 'Patience',
			'floor_no' => 2,
			'building_id' => 13,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 117,
			'room_no' => '10',
			'name' => '',
			'floor_no' => 2,
			'building_id' => 13,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 118,
			'room_no' => '11',
			'name' => 'Cooperation',
			'floor_no' => 2,
			'building_id' => 13,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 119,
			'room_no' => '12',
			'name' => 'Punctuality',
			'floor_no' => 2,
			'building_id' => 13,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 120,
			'room_no' => '',
			'name' => 'Mathematics 7&8 Resource Learning Center',
			'floor_no' => 2,
			'building_id' => 13,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 121,
			'room_no' => '13',
			'name' => 'Righteousness',
			'floor_no' => 3,
			'building_id' => 13,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 122,
			'room_no' => '14',
			'name' => 'Purity',
			'floor_no' => 3,
			'building_id' => 13,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 123,
			'room_no' => '15',
			'name' => 'Simplicity',
			'floor_no' => 3,
			'building_id' => 13,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 124,
			'room_no' => '16',
			'name' => 'Fortitude',
			'floor_no' => 3,
			'building_id' => 13,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 125,
			'room_no' => '17',
			'name' => 'Charity',
			'floor_no' => 3,
			'building_id' => 13,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 126,
			'room_no' => '18',
			'name' => 'Integrity',
			'floor_no' => 3,
			'building_id' => 13,
			'created_at' => now(),
			'updated_at' => now(),
		]);
        DB::table('classrooms')->insert([
			'id' => 127,
			'room_no' => '',
			'name' => 'SHS TVL 2 Lab Building',
			'floor_no' => 1,
			'building_id' => 14,
			'created_at' => now(),
			'updated_at' => now(),
		]);
        DB::table('classrooms')->insert([
			'id' => 128,
			'room_no' => '1',
			'name' => 'Love',
			'floor_no' => 1,
			'building_id' => 15,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 129,
			'room_no' => '2',
			'name' => 'Peace',
			'floor_no' => 1,
			'building_id' => 15,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 130,
			'room_no' => '3',
			'name' => 'Hope',
			'floor_no' => 1,
			'building_id' => 15,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 131,
			'room_no' => '4',
			'name' => 'Orwell',
			'floor_no' => 1,
			'building_id' => 15,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 132,
			'room_no' => '5',
			'name' => 'Shakespeare',
			'floor_no' => 1,
			'building_id' => 15,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 133,
			'room_no' => '',
			'name' => 'Daloy Publication Office',
			'floor_no' => 1,
			'building_id' => 15,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 134,
			'room_no' => '6',
			'name' => 'Honesty',
			'floor_no' => 2,
			'building_id' => 15,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 135,
			'room_no' => '7',
			'name' => 'Humility',
			'floor_no' => 2,
			'building_id' => 15,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 136,
			'room_no' => '8',
			'name' => 'Generosity',
			'floor_no' => 2,
			'building_id' => 15,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 137,
			'room_no' => '9',
			'name' => 'Kindness',
			'floor_no' => 2,
			'building_id' => 15,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 138,
			'room_no' => '10',
			'name' => 'Courtesy',
			'floor_no' => 2,
			'building_id' => 15,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 139,
			'room_no' => '11',
			'name' => 'Obedience',
			'floor_no' => 3,
			'building_id' => 15,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 140,
			'room_no' => '12',
			'name' => 'Courage',
			'floor_no' => 3,
			'building_id' => 15,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 141,
			'room_no' => '13',
			'name' => 'Respect',
			'floor_no' => 3,
			'building_id' => 15,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 142,
			'room_no' => '14',
			'name' => 'Loyalty',
			'floor_no' => 3,
			'building_id' => 15,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 143,
			'room_no' => '15',
			'name' => 'Prudence',
			'floor_no' => 3,
			'building_id' => 15,
			'created_at' => now(),
			'updated_at' => now(),
		]);
        DB::table('classrooms')->insert([
			'id' => 144,
			'room_no' => '',
			'name' => 'TESDA Office',
			'floor_no' => 1,
			'building_id' => 16,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 145,
			'room_no' => '1',
			'name' => 'Food & Beverage Services NC II',
			'floor_no' => 1,
			'building_id' => 16,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 146,
			'room_no' => '2',
			'name' => 'Bread & Pastry Production NC II',
			'floor_no' => 1,
			'building_id' => 16,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 147,
			'room_no' => '3',
			'name' => 'Cookery NC II',
			'floor_no' => 1,
			'building_id' => 16,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 148,
			'room_no' => '4',
			'name' => '',
			'floor_no' => 1,
			'building_id' => 16,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 149,
			'room_no' => '5',
			'name' => 'Events Management NC III',
			'floor_no' => 2,
			'building_id' => 16,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 150,
			'room_no' => '6',
			'name' => 'Electrical Installation and Maintenance Grade 10',
			'floor_no' => 2,
			'building_id' => 16,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 151,
			'room_no' => '7',
			'name' => '',
			'floor_no' => 2,
			'building_id' => 16,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 152,
			'room_no' => '8',
			'name' => 'Technical Drafting NC II',
			'floor_no' => 2,
			'building_id' => 16,
			'created_at' => now(),
			'updated_at' => now(),
		]);
        DB::table('classrooms')->insert([
			'id' => 153,
			'room_no' => '1',
			'name' => 'Beauty and Nail Care NC II',
			'floor_no' => 1,
			'building_id' => 17,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 154,
			'room_no' => '2',
			'name' => '',
			'floor_no' => 1,
			'building_id' => 17,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 155,
			'room_no' => '3',
			'name' => 'Shielded Metal Arc Welding G9 Lab Room',
			'floor_no' => 1,
			'building_id' => 17,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 156,
			'room_no' => '4',
			'name' => 'SMAW NC II',
			'floor_no' => 1,
			'building_id' => 17,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 157,
			'room_no' => '5',
			'name' => '',
			'floor_no' => 2,
			'building_id' => 17,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 158,
			'room_no' => '6',
			'name' => '',
			'floor_no' => 2,
			'building_id' => 17,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 159,
			'room_no' => '7',
			'name' => 'Josefa Escoda',
			'floor_no' => 2,
			'building_id' => 17,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 160,
			'room_no' => '8',
			'name' => 'Cayetano Arellano',
			'floor_no' => 2,
			'building_id' => 17,
			'created_at' => now(),
			'updated_at' => now(),
		]);
        DB::table('classrooms')->insert([
			'id' => 161,
			'room_no' => '1',
			'name' => '',
			'floor_no' => 1,
			'building_id' => 18,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 162,
			'room_no' => '2',
			'name' => 'Aster',
			'floor_no' => 1,
			'building_id' => 18,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 163,
			'room_no' => '3',
			'name' => '',
			'floor_no' => 1,
			'building_id' => 18,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 164,
			'room_no' => '4',
			'name' => '',
			'floor_no' => 1,
			'building_id' => 18,
			'created_at' => now(),
			'updated_at' => now(),
		]);
        DB::table('classrooms')->insert([
			'id' => 165,
			'room_no' => '1',
			'name' => '',
			'floor_no' => 1,
			'building_id' => 19,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 166,
			'room_no' => '2',
			'name' => 'Adelfa',
			'floor_no' => 1,
			'building_id' => 19,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 167,
			'room_no' => '3',
			'name' => 'Gumamela',
			'floor_no' => 1,
			'building_id' => 19,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 168,
			'room_no' => '4',
			'name' => 'Carlos Romulo',
			'floor_no' => 1,
			'building_id' => 19,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 169,
			'room_no' => '5',
			'name' => '',
			'floor_no' => 1,
			'building_id' => 19,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 170,
			'room_no' => '',
			'name' => 'ICNHS-MPC Cafeteria',
			'floor_no' => 2,
			'building_id' => 19,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 171,
			'room_no' => '6',
			'name' => 'Champaca',
			'floor_no' => 2,
			'building_id' => 19,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 172,
			'room_no' => '7',
			'name' => 'Rose',
			'floor_no' => 2,
			'building_id' => 19,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 173,
			'room_no' => '8',
			'name' => 'Jasmine',
			'floor_no' => 2,
			'building_id' => 19,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 174,
			'room_no' => '9',
			'name' => 'Daisy',
			'floor_no' => 2,
			'building_id' => 19,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 175,
			'room_no' => '10',
			'name' => 'Lily',
			'floor_no' => 2,
			'building_id' => 19,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 176,
			'room_no' => '',
			'name' => 'ICNHS-MPC Office',
			'floor_no' => 3,
			'building_id' => 19,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 177,
			'room_no' => '11',
			'name' => 'Orchids',
			'floor_no' => 3,
			'building_id' => 19,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 178,
			'room_no' => '12',
			'name' => 'Gladiola',
			'floor_no' => 3,
			'building_id' => 19,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 179,
			'room_no' => '13',
			'name' => 'Gardenia',
			'floor_no' => 3,
			'building_id' => 19,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 180,
			'room_no' => '14',
			'name' => 'Zinnia',
			'floor_no' => 3,
			'building_id' => 19,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 181,
			'room_no' => '15',
			'name' => '',
			'floor_no' => 3,
			'building_id' => 19,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 182,
			'room_no' => '16',
			'name' => 'Mt. Malindang',
			'floor_no' => 4,
			'building_id' => 19,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 183,
			'room_no' => '17',
			'name' => 'Mt. Taal',
			'floor_no' => 4,
			'building_id' => 19,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 184,
			'room_no' => '18',
			'name' => 'Mt. Pinatubo',
			'floor_no' => 4,
			'building_id' => 19,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 185,
			'room_no' => '',
			'name' => 'Reading Hub for ICNHS SHS HUMSS',
			'floor_no' => 4,
			'building_id' => 19,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 186,
			'room_no' => '19',
			'name' => 'Mt. Mariveles',
			'floor_no' => 4,
			'building_id' => 19,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 187,
			'room_no' => '20',
			'name' => 'Mt. Kanlaon',
			'floor_no' => 4,
			'building_id' => 19,
			'created_at' => now(),
			'updated_at' => now(),
		]);
        		DB::table('classrooms')->insert([
			'id' => 188,
			'room_no' => '1',
			'name' => 'De Vega',
			'floor_no' => 1,
			'building_id' => 20,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 189,
			'room_no' => '2',
			'name' => '',
			'floor_no' => 1,
			'building_id' => 20,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 190,
			'room_no' => '3',
			'name' => '',
			'floor_no' => 1,
			'building_id' => 20,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 191,
			'room_no' => '4',
			'name' => '',
			'floor_no' => 1,
			'building_id' => 20,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 192,
			'room_no' => '',
			'name' => 'Office',
			'floor_no' => 2,
			'building_id' => 20,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 193,
			'room_no' => '5',
			'name' => '',
			'floor_no' => 2,
			'building_id' => 20,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 194,
			'room_no' => '6',
			'name' => '',
			'floor_no' => 2,
			'building_id' => 20,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 195,
			'room_no' => '7',
			'name' => 'Gemelina',
			'floor_no' => 2,
			'building_id' => 20,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 196,
			'room_no' => '8',
			'name' => '',
			'floor_no' => 2,
			'building_id' => 20,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 197,
			'room_no' => '',
			'name' => '106.3 Radio City High Station Studio 1',
			'floor_no' => 3,
			'building_id' => 20,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 198,
			'room_no' => '9',
			'name' => '',
			'floor_no' => 3,
			'building_id' => 20,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 199,
			'room_no' => '10',
			'name' => '',
			'floor_no' => 3,
			'building_id' => 20,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 200,
			'room_no' => '11',
			'name' => 'Tamarino',
			'floor_no' => 3,
			'building_id' => 20,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 201,
			'room_no' => '12',
			'name' => 'Ipil-Ipil',
			'floor_no' => 3,
			'building_id' => 20,
			'created_at' => now(),
			'updated_at' => now(),
		]);
        DB::table('classrooms')->insert([
			'id' => 202,
			'room_no' => '',
			'name' => 'Gymnasium',
			'floor_no' => 1,
			'building_id' => 21,
			'created_at' => now(),
			'updated_at' => now(),
		]);
        DB::table('classrooms')->insert([
			'id' => 203,
			'room_no' => '1',
			'name' => 'Closed',
			'floor_no' => 1,
			'building_id' => 22,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 204,
			'room_no' => '2',
			'name' => 'SHS-TVL Canteen',
			'floor_no' => 1,
			'building_id' => 22,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 205,
			'room_no' => '3',
			'name' => 'Quartz',
			'floor_no' => 2,
			'building_id' => 22,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 206,
			'room_no' => '4',
			'name' => 'Pearl',
			'floor_no' => 2,
			'building_id' => 22,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 207,
			'room_no' => '5',
			'name' => 'Sunstone',
			'floor_no' => 3,
			'building_id' => 22,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 208,
			'room_no' => '6',
			'name' => 'Sunstone',
			'floor_no' => 3,
			'building_id' => 22,
			'created_at' => now(),
			'updated_at' => now(),
		]);
        DB::table('classrooms')->insert([
			'id' => 209,
			'room_no' => '',
			'name' => 'ICNHS Clinic Building',
			'floor_no' => 1,
			'building_id' => 23,
			'created_at' => now(),
			'updated_at' => now(),
		]);
        DB::table('classrooms')->insert([
			'id' => 210,
			'room_no' => '1',
			'name' => 'John Dalton',
			'floor_no' => 1,
			'building_id' => 24,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 211,
			'room_no' => '',
			'name' => 'Science Research Room',
			'floor_no' => 1,
			'building_id' => 24,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 212,
			'room_no' => '2',
			'name' => 'Newton',
			'floor_no' => 1,
			'building_id' => 24,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 213,
			'room_no' => '3',
			'name' => 'Carolus Linnaeus',
			'floor_no' => 1,
			'building_id' => 24,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 214,
			'room_no' => '4',
			'name' => 'Gregor Johann Mendel',
			'floor_no' => 1,
			'building_id' => 24,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 215,
			'room_no' => '',
			'name' => 'SPTA Office',
			'floor_no' => 1,
			'building_id' => 24,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 216,
			'room_no' => '5',
			'name' => 'Galileo Galilei',
			'floor_no' => 2,
			'building_id' => 24,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 217,
			'room_no' => '6',
			'name' => 'Edison',
			'floor_no' => 2,
			'building_id' => 24,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 218,
			'room_no' => '7',
			'name' => 'Ernest Rutherford',
			'floor_no' => 2,
			'building_id' => 24,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 219,
			'room_no' => '8',
			'name' => 'James Clerk Maxwell',
			'floor_no' => 2,
			'building_id' => 24,
			'created_at' => now(),
			'updated_at' => now(),
		]);
        DB::table('classrooms')->insert([
			'id' => 220,
			'room_no' => '1',
			'name' => 'Opal',
			'floor_no' => 1,
			'building_id' => 25,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 221,
			'room_no' => '2',
			'name' => 'Ruby',
			'floor_no' => 1,
			'building_id' => 25,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 222,
			'room_no' => '3',
			'name' => 'Diamond',
			'floor_no' => 1,
			'building_id' => 25,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 223,
			'room_no' => '',
			'name' => 'Iligan City National High School SHS Department Office',
			'floor_no' => 1,
			'building_id' => 25,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 224,
			'room_no' => '4',
			'name' => 'Emerald',
			'floor_no' => 2,
			'building_id' => 25,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 225,
			'room_no' => '5',
			'name' => 'Sapphire',
			'floor_no' => 2,
			'building_id' => 25,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 226,
			'room_no' => '6',
			'name' => 'Turquoise',
			'floor_no' => 2,
			'building_id' => 25,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 227,
			'room_no' => '7',
			'name' => 'Beryl',
			'floor_no' => 2,
			'building_id' => 25,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 228,
			'room_no' => '8',
			'name' => 'Mt. Banahaw',
			'floor_no' => 3,
			'building_id' => 25,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 229,
			'room_no' => '9',
			'name' => 'Mt. Pulag',
			'floor_no' => 3,
			'building_id' => 25,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 230,
			'room_no' => '10',
			'name' => 'Mt. Makiling',
			'floor_no' => 3,
			'building_id' => 25,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 231,
			'room_no' => '11',
			'name' => 'Calcite',
			'floor_no' => 3,
			'building_id' => 25,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 232,
			'room_no' => '12',
			'name' => 'Mt. Dulang-Dulang',
			'floor_no' => 4,
			'building_id' => 25,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 233,
			'room_no' => '13',
			'name' => 'Mt. Kitanglad',
			'floor_no' => 4,
			'building_id' => 25,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 234,
			'room_no' => '14',
			'name' => 'Mt. Mason',
			'floor_no' => 4,
			'building_id' => 25,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 235,
			'room_no' => '15',
			'name' => 'Garnet',
			'floor_no' => 4,
			'building_id' => 25,
			'created_at' => now(),
			'updated_at' => now(),
		]);
        DB::table('classrooms')->insert([
			'id' => 236,
			'room_no' => '',
			'name' => 'Oval Stage',
			'floor_no' => 1,
			'building_id' => 26,
			'created_at' => now(),
			'updated_at' => now(),
		]);
        DB::table('classrooms')->insert([
			'id' => 237,
			'room_no' => '1',
			'name' => 'Amethyst',
			'floor_no' => 1,
			'building_id' => 27,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 238,
			'room_no' => '2',
			'name' => 'Mt. Musuan',
			'floor_no' => 1,
			'building_id' => 27,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 239,
			'room_no' => '3',
			'name' => 'Titanite',
			'floor_no' => 1,
			'building_id' => 27,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 240,
			'room_no' => '4',
			'name' => 'Jasper',
			'floor_no' => 1,
			'building_id' => 27,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 241,
			'room_no' => '5',
			'name' => 'Jade',
			'floor_no' => 2,
			'building_id' => 27,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 242,
			'room_no' => '6',
			'name' => 'Mt. Daguldol',
			'floor_no' => 2,
			'building_id' => 27,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 243,
			'room_no' => '7',
			'name' => 'Mt. Bulusan',
			'floor_no' => 2,
			'building_id' => 27,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 244,
			'room_no' => '8',
			'name' => 'Mt. Agad-Agad',
			'floor_no' => 2,
			'building_id' => 27,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 245,
			'room_no' => '9',
			'name' => 'Mt. Makaturing',
			'floor_no' => 3,
			'building_id' => 27,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 246,
			'room_no' => '10',
			'name' => 'Aquamarine',
			'floor_no' => 3,
			'building_id' => 27,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 247,
			'room_no' => '11',
			'name' => 'Hiddenite',
			'floor_no' => 3,
			'building_id' => 27,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 248,
			'room_no' => '12',
			'name' => 'Zircon',
			'floor_no' => 3,
			'building_id' => 27,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 249,
			'room_no' => '13',
			'name' => 'Amber',
			'floor_no' => 4,
			'building_id' => 27,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 250,
			'room_no' => '14',
			'name' => 'Mt. Ragang',
			'floor_no' => 4,
			'building_id' => 27,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 251,
			'room_no' => '15',
			'name' => '',
			'floor_no' => 4,
			'building_id' => 27,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 252,
			'room_no' => '16',
			'name' => '',
			'floor_no' => 4,
			'building_id' => 27,
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 253,
			'room_no' => '',
			'name' => 'Electrobots Club ICNHS Scientific Research Hub',
			'floor_no' => 4,
			'building_id' => 27,
			'created_at' => now(),
			'updated_at' => now(),
		]);
        	DB::table('classrooms')->insert([
			'id' => 254,
			'room_no' => '',
			'name' => 'Canteen',
			'floor_no' => 1,
			'building_id' => 28, 
			'created_at' => now(),
			'updated_at' => now(),
		]);

		DB::table('classrooms')->insert([
			'id' => 255,
			'room_no' => '',
			'name' => 'Grade 9 Nilo',
			'floor_no' => 1,
			'building_id' => 28,
			'created_at' => now(),
			'updated_at' => now(),
		]);
        	DB::table('classrooms')->insert([
			'id' => 256,
			'room_no' => '',
			'name' => 'Araling Panlipunan Department Office',
			'floor_no' => 1,
			'building_id' => 29,
			'created_at' => now(),
			'updated_at' => now(),
		]);
        DB::table('classrooms')->insert([
			'id' => 257,
			'room_no' => '',
			'name' => 'TLE Office',
			'floor_no' => 1,
			'building_id' => 30,
			'created_at' => now(),
			'updated_at' => now(),
		]);
              
                                                                                                                                                                                                               
    }
}