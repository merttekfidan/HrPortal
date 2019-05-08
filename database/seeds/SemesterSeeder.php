<?php

use Illuminate\Database\Seeder;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data=array(
        array('semester_name'=>'Winter'),
        array('semester_name'=>'Summer')
      );
      DB::table('semesters')->insert($data);
    }
}
