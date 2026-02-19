<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
     {
            //   for($i=0;$i<10;$i++){
            //         student::create([
            //             'name'=>fake()->name(),
            //             'email'=>fake()->unique()->email()
            //         ]);
            //     }

    // $students = collect([
    //     [
    //         'name'=>'ajharul islam',
    //         'email'=>'ajharul@gmail.com'
    //     ],
    //     [
    //         'name'=>'kamrul islam',
    //         'email'=>'kamrul@gmail.com'
    //     ],
    //     [
    //         'name'=>'maria islam',
    //         'email'=>'maria@gmail.com'
    //     ]
    // ]);

    // $students->each(function($student){
    //   Student::insert($student);
    // });



        // Student::create([
        //     'name'=>'ajharul islam',
        //     'email'=>'ajharul@gmail.com'
        // ]);

        Student::factory(10)->create();
        
    }
}
