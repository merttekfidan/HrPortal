<?php

use Illuminate\Database\Seeder;

class AccountingPeriodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data=array(
        array('period'=>'2016-2017'),
        array('period'=>'2017-2018'),
        array('period'=>'2018-2019'),
        array('period'=>'2019-2020')
    );
      DB::table('accounting_periods')->insert($data);
    }
}
