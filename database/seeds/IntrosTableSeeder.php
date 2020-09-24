<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IntrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('intros')->insert([
            'title_ge' => Str::random(14),
            'title_en'  => Str::random(14),
            'desc_ge'  => Str::random(25),
            'desc_en'  => Str::random(25),
            'link_ge'  => Str::random(10),
            'link_en'  => Str::random(10),
            'url'  => Str::random(5),
            'image'  => Str::random(40)
        ]);
    }
}
