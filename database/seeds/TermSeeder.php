<?php

use Illuminate\Database\Seeder;

class TermSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data=array(
        array('term_name'=>'Full-time'),
        array('term_name'=>'Part-time')
      );
      DB::table('terms')->insert($data);
    }
}
