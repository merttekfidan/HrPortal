<?php

use Illuminate\Database\Seeder;

class EntityFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
          array('form_name'=>'courses')
        );
        DB::table('entity_forms')->insert($data);
    }
}
