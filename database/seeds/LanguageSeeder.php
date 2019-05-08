<?php

use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data=array(
        array('language'=>'English'),
        array('language'=>'Polish'),
        array('language'=>'Turkish'),
        array('language'=>'Hybrid'),
        array('language'=>'Others')
    );
      DB::table('languages')->insert($data);
    }
}
