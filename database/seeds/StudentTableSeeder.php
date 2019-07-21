<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('students')->insert([
                [
                    'id'=>7,
                    'name'=>'Nguyen Van A',
                    'address'=>'HN',
                    'university'=>'FPT Poly',
                    'class_id'=>1,
                    
                ],
                [
                    'id'=>8,
                    'name'=>'Nguyen Van B',
                    'address'=>'HN',
                    'university'=>'FPT Poly',
                    'class_id'=>2,
                    
                ],

                [
                    'id'=>9,
                    'name'=>'Nguyen Van C',
                    'address'=>'HCM',
                    'university'=>'FPT Poly',
                    'class_id'=>3,
                    
                ],
            ]);
    }
}
