<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MenuItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu_items')->insert([
            'label_en' => Str::random(7),
            'label_ge' => Str::random(7),
            'title_ge' => Str::random(30),
            'title_en' => Str::random(30),
            'body_ge' => Str::random(200),
            'body_en' => Str::random(200),
            'bg_color' =>'#'. rand(0, 999),
            'image' => Str::random(40)
        ]);
    }
}
