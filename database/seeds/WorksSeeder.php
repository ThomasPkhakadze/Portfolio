<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('works')->insert([
            'work_ge' => Str::random(11),
            'work_en'  => Str::random(11),
            'image'  => Str::random(33)
        ]);
    }
}
