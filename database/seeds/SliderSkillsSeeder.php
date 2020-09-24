<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderSkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slider_skills')->insert([
            'skills_str_ge' => Str::random(9),
            'skills_str_en'  => Str::random(9),
            'skills_int' => rand(0, 100)
        ]);
    }
}
