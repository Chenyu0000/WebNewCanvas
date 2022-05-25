<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\announcement;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //  \App\Models\User::factory(2)->create();

        User::create([
            'name' => 'admin',
            'password'=> bcrypt('password'),
            'email' => 'admin@admin.com',
            'role' => 'admin',
            'isActive' => TRUE,
        ]);
        User::create([
            'name' => 'teacher1',
            'password'=> bcrypt('password'),
            'email' => 'teacher1@gmail.com',
            'role' => 'teacher',
            'isActive' => TRUE,
        ]);
        User::create([
            'name' => 'student1',
            'password'=> bcrypt('password'),
            'email' => 'student1@gmail.com',
            'role' => 'student',
            'isActive' => TRUE,
        ]);
        User::create([
            'name' => 'student2',
            'password'=> bcrypt('password'),
            'email' => 'student2@gmail.com',
            'role' => 'student',
            'isActive' => TRUE,
        ]);
        User::create([
            'name' => 'student3',
            'password'=> bcrypt('password'),
            'email' => 'student3@gmail.com',
            'role' => 'student',
            'isActive' => TRUE,
        ]);

        announcement::create([
            'title' => 'ann1',
            'content' => 'blabla',
            'course_id' => 1,
        ]);

        


    }
}
