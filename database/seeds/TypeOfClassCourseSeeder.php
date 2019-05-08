<?php

use Illuminate\Database\Seeder;

class TypeOfClassCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data=array(
        array('type_of_class_id'=>'1','course_id'=>'1'),
        array('type_of_class_id'=>'2','course_id'=>'1'),
        array('type_of_class_id'=>'3','course_id'=>'1'),
        array('type_of_class_id'=>'4','course_id'=>'2')
      );
      DB::table('type_of_class_courses')->insert($data);
    }
}
