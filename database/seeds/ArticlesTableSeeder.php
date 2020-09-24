<?php


use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'title_ge' => Str::random(13),
            'title_en' => Str::random(13),
            'body_ge' => Str::random(100),
            'body_en' => Str::random(100),
            'url' => Str::random(6),
            'image' => Str::random(40)
        ]);
    }
}
