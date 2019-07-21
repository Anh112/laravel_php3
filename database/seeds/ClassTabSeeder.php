<?php

use Illuminate\Database\Seeder;

class ClassTabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        	DB::table('classes')->insert([
        		[
        			'id' => 1,
        			'name' => 'Pt13312',
        			'teacher_name' => 'NV A',
        			'major' => 'CNTT',
        			'max_students' => 50,
        		],
                [
        			'id' => 2,
        			'name' => 'Pt133121',
        			'teacher_name' => 'NV B',
        			'major' => 'CNTT',
        			'max_students' => 50,
        		],
                [
        			'id' => 3,
        			'name' => 'Pt133122',
        			'teacher_name' => 'NV C',
        			'major' => 'CNTT',
        			'max_students' => 50,
        		]
        	]);
    }
}
