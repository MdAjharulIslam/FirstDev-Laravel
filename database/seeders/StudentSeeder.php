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
        // $students = Student::insert([
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
    }
}





// <?php

// namespace Database\Seeders;

// use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Str;

// class StudentSeeder extends Seeder
// {
//     /**
//      * Run the database seeds.
//      */
//     public function run(): void
//     {
//         // Insert a single student
//         DB::table('students')->insert([
//             'name' => 'Ajharul Islam',
//             'email' => 'ajharul@gmail.com',
//             'created_at' => now(),
//             'updated_at' => now()
//         ]);

//         // Insert multiple students at once
//         DB::table('students')->insert([
//             [
//                 'name' => 'Kamrul Islam',
//                 'email' => 'kamrul@gmail.com',
//                 'created_at' => now(),
//                 'updated_at' => now()
//             ],
//             [
//                 'name' => 'Maria Islam',
//                 'email' => 'maria@gmail.com',
//                 'created_at' => now(),
//                 'updated_at' => now()
//             ]
//         ]);

//         // Insert 10 random students using a loop and faker
//         for ($i = 0; $i < 10; $i++) {
//             DB::table('students')->insert([
//                 'name' => fake()->name(),
//                 'email' => fake()->unique()->safeEmail(),
//                 'created_at' => now(),
//                 'updated_at' => now()
//             ]);
//         }
//     }
// }
