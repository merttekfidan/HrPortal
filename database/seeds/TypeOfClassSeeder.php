<?php

use Illuminate\Database\Seeder;

class TypeOfClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data=array(
        array('type_name'=>'Practice'),
        array('type_name'=>'Exam'),
        array('type_name'=>'Lecture'),
        array('type_name'=>'Seminar')
      );
      DB::table('type_of_classes')->insert($data);

    }
}
