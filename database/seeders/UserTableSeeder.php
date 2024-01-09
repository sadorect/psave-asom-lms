<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            //Admin

            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@asom-project.com',
                'password' => Hash::make('admin'),
                'role' => 'admin',
                'status' => '1',
            ],

             //Instructor

             [
                'name' => 'Instructor',
                'username' => 'instructor',
                'email' => 'instructor@asom-project.com',
                'password' => Hash::make('instructor'),
                'role' => 'instructor',
                'status' => '1',
             ],

             //Student

             [
                'name' => 'Student',
                'username' => 'student',
                'email' => 'student@asom-project.com',
                'password' => Hash::make('student'),
                'role' => 'student',
                'status' => '1',
            ]
        ]);
    }
}
