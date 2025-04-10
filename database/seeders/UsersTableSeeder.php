<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'James Bolongan',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin'),
            'is_admin' => 1,
            'is_allowed_login' => true,
            'account_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Staff User',
            'email' => 'staff@staff.com',
            'email_verified_at' => now(),
            'password' => Hash::make('staff'),
            'is_allowed_login' => true,
            'account_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Parent User',
            'email' => 'parent@parent.com',
            'email_verified_at' => now(),
            'password' => Hash::make('parent'),
            'is_allowed_login' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
