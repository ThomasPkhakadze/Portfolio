<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            'title_ge' => Str::random(14),
            'title_en'  => Str::random(14),
            'desc_ge'  => Str::random(25),
            'desc_en'  => Str::random(25),
            'image'  => Str::random(40)
        ]);    
    }
}
