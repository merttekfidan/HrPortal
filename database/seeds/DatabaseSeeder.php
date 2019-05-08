<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AccountingPeriodSeeder::class);
        $this->call(LanguageSeeder::class);
        $this->call(SemesterSeeder::class);
        $this->call(TermSeeder::class);
        $this->call(TypeOfClassSeeder::class);
        $this->call(TypeOfClassCourseSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(EntityFormSeeder::class);
        $this->call(EntitySeeder::class);
        $this->call(CourseSeeder::class);
    }
}
