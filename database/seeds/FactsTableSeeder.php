<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facts')->insert([
            'education_ge' => Str::random(111),
            'education_en' => Str::random(111),
            'experience_ge' => Str::random(111),
            'experience_en' => Str::random(111)
                           
        ]);
    }
}
